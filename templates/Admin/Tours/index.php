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
              <a href="<?= $this->Url->build(['controller' => 'tours', 'action' => 'add']); ?>" class="btn btn-success"><i class="fas fa-plus-circle"></i> Add</a>
            </div>
            <div class="float-right">
              <a href="#" class="btn btn-info"><i class="fas fa-print"></i> Print</a>
              <a href="#" class="btn btn-info"><i class="fas fa-file-csv"></i> Export to CSV</a>
              <a href="<?= $this->Url->build(['controller' => 'tours', 'action' => 'delete']); ?>" class="btn btn-danger"><i class="fas fa-trash-alt"></i> Delete</a>
            </div>
          </div>
          <div class="table-responsive">
            <table class="table table-bordered" id="dataTableTour" width="100%" cellspacing="0">
              <thead>
                <tr>
                  <th rowspan="2" class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </th>
                  <th rowspan="2" class="text-center align-middle">Image</th>
                  <th rowspan="2" class="text-center align-middle">Tour Name</th>
                  <th rowspan="2" class="text-center align-middle">Hotel Rating</th>
                  <th rowspan="2" class="text-center align-middle">Travelling Date</th>
                  <th rowspan="2" class="text-center align-middle">Airline</th>
                  <th rowspan="2" class="text-center align-middle">Allotment</th>
                  <th rowspan="2" class="text-center align-middle">Balance</th>
                  <th colspan="5" class="text-center align-middle">Price</th>
                  <th rowspan="2" class="text-center align-middle">Status</th>
                </tr>
                <tr>
                  <th class="text-center align-middle">TWN</th>
                  <th class="text-center align-middle">SGL</th>
                  <th class="text-center align-middle">CTW</th>
                  <th class="text-center align-middle">CWB</th>
                  <th class="text-center align-middle">CNB</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    <span class="badge badge-success">Confirmed</span>
                  </td>
                </tr>
                <tr>
                  <td class="text-center align-middle">
                    <div class="custom-control custom-checkbox">
                      <input type="checkbox" class="custom-control-input" id="defaultUnchecked">
                      <label class="custom-control-label" for="defaultUnchecked"> </label>
                    </div>
                  </td>
                  <td class="text-center align-middle">
                    <img src="https://i.imgur.com/smpQ68Z.jpg" alt="" class="img-fluid" style="width: 50px; height:50px;">
                  </td>
                  <td class="text-center align-middle">
                    7H6M Pusing-Pusing Thailand
                  </td>
                  <td class="text-center align-middle">
                    <i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i><i class="fas fa-star"></i>
                  </td>
                  <td class="text-center align-middle" style="width:80px;">
                    23/11/2020 13/12/2020
                  </td>
                  <td class="text-center align-middle">
                    D7
                  </td>
                  <td class="text-center align-middle">
                    30
                  </td>
                  <td class="text-center align-middle">
                    12
                  </td>
                  <td class="text-center align-middle">
                    9990
                  </td>
                  <td class="text-center align-middle">
                    10090
                  </td>
                  <td class="text-center align-middle">
                    7890
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
                  <td class="text-center align-middle">
                    7790
                  </td>
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