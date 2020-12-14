<?php

declare(strict_types=1);

namespace App;

use Cake\Core\Configure;
use Cake\Core\Exception\MissingPluginException;
use Cake\Error\Middleware\ErrorHandlerMiddleware;
use Cake\Http\BaseApplication;
use Cake\Http\Middleware\BodyParserMiddleware;
use Cake\Http\Middleware\CsrfProtectionMiddleware;
use Cake\Http\MiddlewareQueue;
use Cake\Routing\Middleware\AssetMiddleware;
use Cake\Routing\Middleware\RoutingMiddleware;

use Authentication\AuthenticationService;
use Authentication\AuthenticationServiceInterface;
use Authentication\AuthenticationServiceProviderInterface;
use Authentication\Middleware\AuthenticationMiddleware;
use Psr\Http\Message\ServerRequestInterface;


class Application extends BaseApplication implements AuthenticationServiceProviderInterface
{

    public function bootstrap(): void
    {
        $this->addPlugin('DebugKit');

        parent::bootstrap();

        if (PHP_SAPI === 'cli') {
            $this->bootstrapCli();
        }

        if (Configure::read('debug')) {
            $this->addPlugin('DebugKit');
        }
    }


    public function middleware(MiddlewareQueue $middlewareQueue): MiddlewareQueue
    {
        $middlewareQueue

            ->add(new ErrorHandlerMiddleware(Configure::read('Error')))

            ->add(new AssetMiddleware([
                'cacheTime' => Configure::read('Asset.cacheTime'),
            ]))

            ->add(new RoutingMiddleware($this))

            ->add(new BodyParserMiddleware())

            ->add(new AuthenticationMiddleware($this))

            ->add(new CsrfProtectionMiddleware([
                'httponly' => true,
            ]));


        return $middlewareQueue;
    }

    protected function bootstrapCli(): void
    {
        try {
            $this->addPlugin('Bake');
        } catch (MissingPluginException $e) {
        }

        $this->addPlugin('Migrations');
    }

    public function getAuthenticationService(ServerRequestInterface $request): AuthenticationServiceInterface
    {
        $authenticationService = new AuthenticationService([
            'unauthenticatedRedirect' => \Cake\Routing\Router::url([
                'prefix' => 'Admin',
                'controller' => 'Users',
                'action' => 'login'
            ]),
            'queryParam' => 'redirect',
        ]);

        $authenticationService->loadIdentifier('Authentication.Password', [
            'fields' => [
                'username' => 'email',
                'password' => 'password',
            ]
        ]);

        $authenticationService->loadAuthenticator('Authentication.Session');
        $authenticationService->loadAuthenticator('Authentication.Form', [
            'fields' => [
                'username' => 'email',
                'password' => 'password',
            ],
            'loginUrl' => \Cake\Routing\Router::url([
                'prefix' => 'Admin',
                'controller' => 'Users',
                'action' => 'login'
            ])
        ]);

        return $authenticationService;
    }
}
