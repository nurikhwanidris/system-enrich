<?php
$query = "SELECT * FROM airlines";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'enrich-new'), $query);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Customer Management</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>

    <form class="row" action="" method="POST">
        <div class="col-xl-12 col-lg-12">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Customers : CS000001</h6>
                </div>
                <div class="card-body">
                    <p class="m-0 font-weight-bold text-warning">Staff Info</p>
                    <div class="row my-2">
                        <div class="col-lg-2 mb-2">
                            <label for="staff">Name</label>
                            <input type="text" name="staff" id="staff" class="form-control" value="<?= $this->Identity->get('fullName'); ?>" readonly>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="created">Created</label>
                            <input type="text" name="created" id="created" class="form-control" value="<?= $timenow; ?>" readonly>
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="source">Source</label>
                            <select name="source" id="" class="form-control" required>
                                <option value="">None</option>
                                <option value="Facebook">Facebook</option>
                                <option value="Wesbite">Wesbite</option>
                                <option value="Flyers">Flyers</option>
                                <option value="Friends/Family">Friends/Family</option>
                                <option value="Matta Fair">Matta Fair</option>
                                <option value="Past Clients">Past Clients</option>
                            </select>
                        </div>
                    </div>
                    <hr>
                    <p class="m-0 font-weight-bold text-warning">Client's Info</p>
                    <div class="row my-2">
                        <div class="col-lg-3 mb-2">
                            <label for="clientName">Name</label>
                            <input type="text" name="clientName" id="" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="phoneNumber">Phone</label>
                            <div class="input-group">
                                <div class="input-group-prepend">
                                    <span class="input-group-text" id="phoneNumber">+60</span>
                                </div>
                                <input type="text" name="clientPhone" id="phoneNumber" class="form-control">
                            </div>
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="email">Email</label>
                            <input type="email" name="clientEmail" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-3 mb-2">
                            <label for="street1">Street 1</label>
                            <input type="text" name="clientStreet1" id="street1" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="street2">Street 2</label>
                            <input type="text" name="clientStreet2" id="street2" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="city">City</label>
                            <input type="text" name="clientCity" id="city" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-3 mb-2">
                            <label for="postcode">Postcode</label>
                            <input type="text" name="clientPostcode" id="postcode" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="state">State</label>
                            <input type="text" name="clientState" id="state" class="form-control">
                        </div>
                    </div>
                    <hr>
                    <p class="m-0 font-weight-bold text-warning">Package Info</p>
                    <div class="row my-2">
                        <div class="col-lg-3 mb-2">
                            <label for="selectPackage">Select Package</label>
                            <select name="" id="" class="form-control">
                                <option value="">Select</option>
                                <option value="10H7M St. Petersburg Bersejarah">10H7M St. Petersburg Bersejarah</option>
                                <option value="4H3M Kembara Saigon">4H3M Kembara Saigon</option>
                                <option value="8H6M Kembara Mesir">8H6M Kembara Mesir</option>
                            </select>
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="packageName">Package</label>
                            <input type="text" name="packageName" id="packageName" class="form-control">
                        </div>
                        <div class="col-lg-3 mb-2">
                            <label for="packageDate">Package Date</label>
                            <input type="text" name="packageDate" id="packageDate" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col-lg-2 mb-2">
                            <label for="twin">Twin</label>
                            <input type="text" name="twin" id="twin" class="form-control">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="single">Single</label>
                            <input type="text" name="single" id="single" class="form-control">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="childBed">Child with Bed</label>
                            <input type="text" name="childbed" id="childbed" class="form-control">
                        </div>
                        <div class="col-lg-2 mb-2">
                            <label for="childNoBed">Child no Bed</label>
                            <input type="text" name="childNoBed" id="childNoBed" class="form-control">
                        </div>
                    </div>
                    <div class="row my-2">
                        <div class="col">
                            <button type="submit" class="btn btn-success">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
</div>