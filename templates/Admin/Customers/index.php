<!-- Begin Page Content -->
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tours Management</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <!-- Content Row -->

    <div class="row">

        <!-- Area Chart -->
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <!-- Card Header - Dropdown -->
                <div class="card-header py-3 d-flex flex-row align-items-center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">List of Tours</h6>
                    <div class="dropdown no-arrow">
                        <a class="dropdown-toggle" href="#" role="button" id="dropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="fas fa-ellipsis-v fa-sm fa-fw text-gray-400"></i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-right shadow animated--fade-in" aria-labelledby="dropdownMenuLink">
                            <div class="dropdown-header">Dropdown Header:</div>
                            <a class="dropdown-item" href="#">Action</a>
                            <a class="dropdown-item" href="#">Another action</a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="#">Something else here</a>
                        </div>
                    </div>
                </div>
                <!-- Card Body -->
                <div class="card-body">
                    <div class="col-lg-12 p-0">
                        <div class="float-left">
                            <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'add']); ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add</a>
                        </div>
                        <div class="float-right">
                            <a href="#" class="btn btn-info"><i class="fas fa-print"></i> Print</a>
                            <a href="#" class="btn btn-info"><i class="fas fa-file-csv"></i> Export to CSV</a>
                            <a href="<?= $this->Url->build(['controller' => 'customers', 'action' => 'delete']); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table table-bordered table-sm" id="dataTableTour" width="100%" cellspacing="0">
                            <thead>
                                <tr>
                                    <th class="text-center align-middle">ID</th>
                                    <th class="text-center align-middle">Staff</th>
                                    <th class="text-center align-middle">Created</th>
                                    <th class="text-center align-middle">Source</th>
                                    <th>Name</th>
                                    <th>Phone</th>
                                    <th>Email</th>
                                    <th>Package</th>
                                    <th class="text-center align-middle">Depart</th>
                                    <th class="text-center align-middle">TWN</th>
                                    <th class="text-center align-middle">SGL</th>
                                    <th class="text-center align-middle">CWB</th>
                                    <th class="text-center align-middle">CNB</th>
                                    <th class="text-center align-middle">Assigned</th>
                                    <th class="text-center align-middle">Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="text-center align-middle">
                                        <a href="#" class="btn btn-success btn-sm">1001</a>
                                    </td>
                                    <td class="text-center align-middle">Ikhwan</td>
                                    <td class="text-center align-middle">01/01/2021</td>
                                    <td class="text-center align-middle">Facebook</td>
                                    <td class="align-middle">Jonathan Blade</td>
                                    <td class="align-middle">60123456789</td>
                                    <td class="align-middle">jonathan.blade@gmail.com</td>
                                    <td class="align-middle">10H7M St. Petersburg Bersejarah</td>
                                    <td class="text-center align-middle">17/12/2021</td>
                                    <td class="text-center align-middle">2</td>
                                    <td class="text-center align-middle">0</td>
                                    <td class="text-center align-middle">0</td>
                                    <td class="text-center align-middle">0</td>
                                    <td class="text-center align-middle">Faridah</td>
                                    <td class="text-center align-middle">
                                        <span class="badge badge-success">Confirmed</span>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>

        <!-- Content Row -->

    </div>
    <!-- /.container-fluid -->

</div>
<!-- End of Main Content -->