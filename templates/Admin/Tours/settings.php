<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tour Management</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <form class="row" action="" method="POST">
        <div class="col xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Tour Settings</h6>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="General-tab" data-toggle="tab" href="#General" role="tab" aria-controls="General" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Type-tab" data-toggle="tab" href="#Type" role="tab" aria-controls="Type" aria-selected="false">Type</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Included-tab" data-toggle="tab" href="#Included" role="tab" aria-controls="Included" aria-selected="false">Included</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Excluded-tab" data-toggle="tab" href="#Excluded" role="tab" aria-controls="Excluded" aria-selected="false">Excluded</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="General" role="tabpanel" aria-labelledby="General-tab">
                            <div class="form-group row my-4">
                                <label for="target" class="col-sm-2 col-form-label">Target</label>
                                <div class="col-sm-3">
                                    <select name="target" id="target" class="form-control">
                                        <option value="_self">Self</option>
                                        <option value="_blank">Blank</option>
                                    </select>
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row my-4">
                                <label for="features" class="col-sm-2 col-form-label">Featured Tours</label>
                                <div class="col-sm-3">
                                    <input type="text" name="feature" id="" class="form-control">
                                </div>
                                <label for="features" class="col-sm-2 col-form-label">Display Order</label>
                                <div class="col-sm-3">
                                    <select name="featuredOrder" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="desc">By Latest First</option>
                                        <option value="asc">By Oldest First</option>
                                        <option value="az">Ascending Order (A-Z)</option>
                                        <option value="za">Descending Order (Z-A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label for="listing" class="col-sm-2 col-form-label">Listing Tours</label>
                                <div class="col-sm-3">
                                    <input type="text" name="listing" id="" class="form-control">
                                </div>
                                <label for="listing" class="col-sm-2 col-form-label">Display Order</label>
                                <div class="col-sm-3">
                                    <select name="listingOrder" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="desc">By Latest First</option>
                                        <option value="asc">By Oldest First</option>
                                        <option value="az">Ascending Order (A-Z)</option>
                                        <option value="za">Descending Order (Z-A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label for="search" class="col-sm-2 col-form-label">Search Tours</label>
                                <div class="col-sm-3">
                                    <input type="text" name="feature" id="" class="form-control">
                                </div>
                                <label for="search" class="col-sm-2 col-form-label">Display Order</label>
                                <div class="col-sm-3">
                                    <select name="searchOrder" id="" class="form-control">
                                        <option value="">Select</option>
                                        <option value="desc">By Latest First</option>
                                        <option value="asc">By Oldest First</option>
                                        <option value="az">Ascending Order (A-Z)</option>
                                        <option value="za">Descending Order (Z-A)</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group row my-4">
                                <label for="related" class="col-sm-2 col-form-label">Related Tours</label>
                                <div class="col-sm-3">
                                    <input type="text" name="related" id="" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row my-4">
                                <label for="metaKeywords" class="col-sm-2 col-form-label">Meta Keywords</label>
                                <div class="col-sm-3">
                                    <input type="text" name="metaKeywords" id="" class="form-control">
                                </div>
                                <label for="metaDescriptions" class="col-sm-2 col-form-label">Meta Descriptions</label>
                                <div class="col-sm-3">
                                    <input type="text" name="metaDescriptions" id="" class="form-control">
                                </div>
                            </div>
                            <hr>
                            <div class="form-group row my-4">
                                <label for="minPrice" class="col-sm-2 col-form-label">Minimum Price</label>
                                <div class="col-sm-3">
                                    <input type="text" name="minPrice" id="" class="form-control">
                                </div>
                                <label for="maxPrice" class="col-sm-2 col-form-label">Maximum Price</label>
                                <div class="col-sm-3">
                                    <input type="text" name="maxPrice" id="" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Type" role="tabpanel" aria-labelledby="Type-tab">
                            <div class="row my-2">
                                <div class="col-12">
                                    <a href="#" class="btn btn-sm btn-info my-3"><i class="fas fa-plus-square"></i> Add Type</a>
                                    <table class=" table table-sm table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center"><input type="checkbox" name="" id="" class="form-control"></th>
                                                <th class="align-middle text-center">Name</th>
                                                <th class="align-middle text-center">Status</th>
                                                <th class="align-middle text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <input type="checkbox" name="" id="" class="form-control">
                                                </td>
                                                <td class="align-middle text-center">SD</td>
                                                <td class="align-middle text-center">Available</td>
                                                <td class="align-middle text-center">
                                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Included" role="tabpanel" aria-labelledby="Included-tab">
                            <div class="row my-2">
                                <div class="col-12">
                                    <a href="#" class="btn btn-sm btn-info my-3"><i class="fas fa-plus-square"></i> Add Included</a>
                                    <table class=" table table-sm table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center"><input type="checkbox" name="" id="" class="form-control"></th>
                                                <th class="align-middle">Text</th>
                                                <th class="align-middle text-center">Status</th>
                                                <th class="align-middle text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <input type="checkbox" name="" id="" class="form-control">
                                                </td>
                                                <td class="align-middle">Insurans kembara - sila hubungi kami bagi khidmat nasihat dan pembelian premium insurans kembara yang sesuai.</td>
                                                <td class="align-middle text-center">Available</td>
                                                <td class="align-middle text-center">
                                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Excluded" role="tabpanel" aria-labelledby="Excluded-tab">
                            <div class="row my-2">
                                <div class="col-12">
                                    <a href="#" class="btn btn-sm btn-info my-3"><i class="fas fa-plus-square"></i> Add Excluded</a>
                                    <table class=" table table-sm table-bordered table-stripped">
                                        <thead>
                                            <tr>
                                                <th class="align-middle text-center"><input type="checkbox" name="" id="" class="form-control"></th>
                                                <th class="align-middle">Text</th>
                                                <th class="align-middle text-center">Status</th>
                                                <th class="align-middle text-center">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="align-middle text-center">
                                                    <input type="checkbox" name="" id="" class="form-control">
                                                </td>
                                                <td class="align-middle">Insurans kembara - sila hubungi kami bagi khidmat nasihat dan pembelian premium insurans kembara yang sesuai.</td>
                                                <td class="align-middle text-center">Available</td>
                                                <td class="align-middle text-center">
                                                    <a href="#" class="btn btn-warning btn-sm"><i class="fas fa-edit"></i></a>
                                                    <a href="#" class="btn btn-danger btn-sm"><i class="fas fa-trash"></i></a>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>