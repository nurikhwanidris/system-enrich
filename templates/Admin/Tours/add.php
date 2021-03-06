<?php
$query = "SELECT * FROM airlines";
$result = mysqli_query(mysqli_connect('localhost', 'root', '', 'enrich-new'), $query);
?>
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Tours Management</h1>
        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
    </div>
    <div class="mess'age error" onclick="this.classList.add('hidden');"><?= $this->Flash->render(); ?></div>
    <?= $this->Form->create($tour); ?>
    <div class="row">
        <div class="col xl-8 col-lg-8">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Add Tours</h6>
                </div>
                <div class="card-body">
                    <ul class="nav nav-tabs" id="myTab" role="tablist">
                        <li class="nav-item">
                            <a class="nav-link active" id="General-tab" data-toggle="tab" href="#General" role="tab" aria-controls="General" aria-selected="true">General</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="flight-tab" data-toggle="tab" href="#flight" role="tab" aria-controls="flight" aria-selected="false">Flight</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Price-tab" data-toggle="tab" href="#Price" role="tab" aria-controls="Price" aria-selected="false">Price</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Include-tab" data-toggle="tab" href="#Include" role="tab" aria-controls="Include" aria-selected="false">Include</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" id="Exclude-tab" data-toggle="tab" href="#Exclude" role="tab" aria-controls="Exclude" aria-selected="false">Exclude</a>
                        </li>
                    </ul>
                    <div class="tab-content" id="myTabContent">
                        <div class="tab-pane fade show active" id="General" role="tabpanel" aria-labelledby="General-tab">
                            <div class="row">
                                <div class="col my-2">
                                    <?= $this->Form->control('name', ['label' => 'Package Name', 'class' => 'form-control', 'id' => 'tourName']); ?>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-2">
                                    <?= $this->Form->control('date', ['label' => 'Package Date', 'class' => 'form-control', 'id' => 'tourDate', 'rows' => '3']); ?>
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col form-group">
                                    <?= $this->Form->control('description', ['label' => 'Package Description', 'class' => 'editor border rounded mb-0 ck ck-content ck-editor__editable ck-rounded-corners ck-editor__editable_inline ck-blurred form-control', 'id' => 'editor1', 'dir' => 'ltr', 'role' => 'textbox', 'aria-label' => 'Rich Text Editor, main', 'spellcheck' => 'false', 'lang' => 'en', 'contenteditable' => 'true', 'default' => 'Replace this with the itinerary.']); ?>
                                </div>
                                <script>
                                    // Replace the <textarea id="editor1"> with a CKEditor 4
                                    // instance, using default configuration.
                                    CKEDITOR.replace('editor1');
                                </script>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <?= $this->Form->control('cities', ['label' => 'Package Cities', 'class' => 'form-control', 'id' => 'tourDate', 'rows' => '3', 'default' => 'ATHENS – KALAMBAKA – BITOLA – OHRID – TIRANA – BAR – PODGORICA – BUDVA – KOTOR – TIVAT – DUBROVNIK – POCITELJ – BLAGAJ – MOSTAR – SARAJEVO – AHMICI – TRAVNIK – JAJCE - BIHAC – PLITVICE LAKES – ZAGREB']); ?>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Include" role="tabpanel" aria-labelledby="Include-tab">
                            <div class="row my-2">
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="airlineTicket" value="1" checked>
                                        <label class="custom-control-label" for="airlineTicket">Tiket penerbangan pergi-balik kelas ekonomi termasuk surcaj minyak dan segala cukai penerbangan.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="hotel" value="2" checked>
                                        <label class="custom-control-label" for="hotel">Hotel penginapan yang selesa sepanjang lawatan (rujuk senarai hotel ditawarkan).</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="cityTax" value="3" checked>
                                        <label class="custom-control-label" for="cityTax">Cukai bandar (city tax).</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="meals" value="4" checked>
                                        <label class="custom-control-label" for="meals">Sarapan pagi di hotel, makan tengahari dan makan malam sesuai Muslim sepanjang lawatan.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="entranceTicket" value="5" checked>
                                        <label class="custom-control-label" for="entranceTicket">Ticket masuk ke tempat-tempat menarik sepanjang lawatan.</label>
                                    </div>
                                </div>
                                <div class="col-6">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="transport" value="6" checked>
                                        <label class="custom-control-label" for="transport">Pengangkutan bas persiaran yang berhawa dan selesa.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="guide" value="7" checked>
                                        <label class="custom-control-label" for="guide">Perkhidmatan pemandu pelancong berbahasa Inggeris yang berpengalaman sepanjang lawatan.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="tipping" value="8" checked>
                                        <label class="custom-control-label" for="tipping">Tip kepada pemandu pelancong dan pemandu bas semasa lawatan.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="tourLeader" value="9" checked>
                                        <label class="custom-control-label" for="tourLeader">Ketua rombongan yang terlatih dan berpengalaman dari Enrich Travelogue Sdn Bhd.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="include[]" class="custom-control-input" id="beg" value="10" checked>
                                        <label class="custom-control-label" for="beg">Percuma edisi beg pengembaraan khas Enrich Travelogue Sdn Bhd.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Exclude" role="tabpanel" aria-labelledby="Exclude-tab">
                            <div class="row my-2">
                                <div class="col">
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="exclude[]" class="custom-control-input" id="insurance" value="1" checked>
                                        <label class="custom-control-label" for="insurance">Insurans kembara - sila hubungi kami bagi khidmat nasihat dan pembelian premium insurans kembara yang sesuai.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="exclude[]" class="custom-control-input" id="surcaj" value="2" checked>
                                        <label class="custom-control-label" for="surcaj">Surcaj tambahan kepada harga yang ditawarkan ketika waktu perayaan, puncak dan cuti sekolah (sekiranya dinyatakan di dalam tarikh perlepasan).</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="exclude[]" class="custom-control-input" id="additionalService" value="3" checked>
                                        <label class="custom-control-label" for="additionalService">Servis tambahan di hotel seperti dobi, snek, minibar dan perkhidmatan porter sekiranya tidak dinyatakan.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="exclude[]" class="custom-control-input" id="extraLuggage" value="4" checked>
                                        <label class="custom-control-label" for="extraLuggage">Bayaran tambahan bagi lebihan had bagasi yang dibawa.</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="exclude[]" class="custom-control-input" id="extraMeals" value="5" checked>
                                        <label class="custom-control-label" for="extraMeals">Makan minum, tiket lawatan dan lawatan lain yang tidak dinyatakan di dalam aturcara</label>
                                    </div>
                                    <div class="custom-control custom-checkbox">
                                        <input type="checkbox" name="exclude[]" class="custom-control-input" id="others" value="6" checked>
                                        <label class="custom-control-label" for="others">Perkara lain selain yang dinyatakan di dalam aturcara dan pakej termasuk kami.</label>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="flight" role="tabpanel" aria-labelledby="flight-tab">
                            <div class="row my-2">
                                <div class="col">
                                    <label for="tourAirlines">Airlines</label>
                                    <div class="">
                                        <select class="form-control mx-0" id="selectSearch" name="tour[airlines]" style="width: 50%;">
                                            <?php while ($row = mysqli_fetch_array($result)) : ?>
                                                <option value="<?= $row['id']; ?>"><?= $row['airline']; ?></option>
                                            <?php endwhile; ?>
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label for="flightSchedule">Flight Schedule</label>
                                    <table class="table table-bordered table-striped table-sm">
                                        <thead>
                                            <tr>
                                                <th class="text-center align-middle">Flights</th>
                                                <th class="text-center align-middle">Airlines</th>
                                                <th class="text-center align-middle">Sectors</th>
                                                <th class="text-center align-middle">ETD</th>
                                                <th class="text-center align-middle">ETA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.flight1', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.airline1', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.sector1', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.etd1', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.eta1', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.flight2', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.airline2', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.sector2', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.etd2', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.eta2', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.flight3', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.airline3', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.sector3', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.etd3', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.eta3', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.flight4', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.airline4', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.sector4', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.etd', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.eta4', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.flight5', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.airline5', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.sector5', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.etd5', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('tour.eta5', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="Price" role="tabpanel" aria-labelledby="Price-tab">
                            <div class="row my-2">
                                <div class="col">
                                    <label for="tourName">Tour Price</label>
                                    <table class="table table-bordered mb-0">
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="text-center align-middle"></th>
                                                <th class="text-center align-middle">TWN</th>
                                                <th class="text-center align-middle">SGL</th>
                                                <th class="text-center align-middle">CTW</th>
                                                <th class="text-center align-middle">CWB</th>
                                                <th class="text-center align-middle">CNB</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <th class="text-center align-middle">
                                                    Normal Person
                                                </th>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('twn', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('sgl', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('ctw', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('cwb', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('cnb', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-center align-middle">
                                                    Senior Citizen
                                                </th>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('snr_twn', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
                                                </td>
                                                <td class="text-center align-middle">
                                                    <?= $a = 'abu'; //$this->Form->control('snr_sgl', ['class' => 'form-control', 'label' => false]); 
                                                    ?>
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
        <div class="col-xl-4 col-lg-4 position-sticky">
            <div class="card shadow mb-4">
                <div class="card-header py-3 d-flex flex-row align-items center justify-content-between">
                    <h6 class="m-0 font-weight-bold text-primary">Main Settings</h6>
                </div>
                <div class="card-body">
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Image</label>
                        <div class="col-md-9">
                            <img id="preview" src="#" alt="image will display here" class="img-thumbnail">
                            <input type='file' id="imgInp">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Status</label>
                        <div class="col-md-9">
                            <?= $a = 'abu'; //$this->Form->select(
                            //'tour.Status',
                            //['Enabled', 'Disabled'],
                            //['class' => 'form-control']
                            //); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Meals</label>
                        <div class="col-md-9">
                            <?= $a = 'abu'; //$this->Form->select('tour.Meals', ['Halfboard', 'Fullboard'], ['class' => 'form-control']); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Hotel Rating</label>
                        <div class="col-md-9">
                            <?= $a = 'abu'; //$this->Form->select('tour.Hotel', ['⭐', '⭐⭐', '⭐⭐⭐', '⭐⭐⭐⭐', '⭐⭐⭐⭐⭐'], ['class' => 'form-control']); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Season</label>
                        <div class="col-md-9">
                            <?= $a = 'abu'; //$this->Form->select('tour.Season', ['Spring', 'Summer', 'Falls', 'Winter'], ['class' => 'form-control']); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Tour Type</label>
                        <div class="col-md-9">
                            <?= $a = 'abu'; //$this->Form->select('tour.Type', ['SD' => 'SD', 'FIT' => 'FIT', 'Academic' => 'Academic', 'Private' => 'Private'], ['class' => 'form-control']); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="Feature" class="col-md-3 my-auto control-label text-left">Feature</label>
                        <div class="col-md-3">
                            <?= $a = 'abu'; //$this->Form->select('tour.Feature', ['No' => 'No', 'Yes' => 'Yes'], ['class' => 'form-control']); 
                            ?>
                        </div>
                        <div class="col-md-3">
                            <?= $a = 'abu'; //$this->Form->date('tour.promoStart', ['class' => 'form-control', 'label' => false]); 
                            ?>
                        </div>
                        <div class="col-md-3">
                            <?= $a = 'abu'; //$this->Form->date('tour.promoEnd', ['class' => 'form-control', 'label' => false]); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="deposit" class="col-md-3 my-auto control-label text-left text-success">Deposit</label>
                        <div class="col-md-5">
                            <?= $a = 'abu'; //$this->Form->select('tour.DepositType', ['Fixed' => 'Fixed', 'Percentage' => 'Percentage'], ['class' => 'form-control']); 
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?= $a = 'abu'; //$this->Form->control('tour.DepositAmount', ['class' => 'form-control', 'label' => false]); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="deposit" class="col-md-3 my-auto control-label text-left text-warning">Discount</label>
                        <div class="col-md-5">
                            <?= $a = 'abu'; //$this->Form->select('tour.DiscountType', ['Fixed' => 'Fixed', 'Percentage' => 'Percentage'], ['class' => 'form-control']); 
                            ?>
                        </div>
                        <div class="col-md-4">
                            <?= $a = 'abu'; //$this->Form->control('tour.DepositAmount', ['class' => 'form-control', 'label' => false]); 
                            ?>
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <?= $this->Form->submit('Submit', ['class' => 'btn btn-primary']); ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?= $this->Form->end() ?>
</div>

<!-- Source for CK Editor -->
<script src="/enrich/js/addons/ckeditor.js"></script>

<!-- Inline Editor for CKeditor -->
<script>
    InlineEditor
        .create(document.querySelector('.editor'), {
            toolbar: {
                items: [
                    'heading',
                    '|',
                    'bold',
                    'italic',
                    'fontSize',
                    'link',
                    'bulletedList',
                    'numberedList',
                    '|',
                    'indent',
                    'outdent',
                    '|',
                    'imageUpload',
                    'blockQuote',
                    'insertTable',
                    'mediaEmbed',
                    'exportPdf',
                    'undo',
                    'redo'
                ]
            },
            language: 'en',
            image: {
                toolbar: [
                    'imageTextAlternative',
                    'imageStyle:full',
                    'imageStyle:side',
                    'linkImage'
                ]
            },
            table: {
                contentToolbar: [
                    'tableColumn',
                    'tableRow',
                    'mergeTableCells'
                ]
            },
            licenseKey: '',

        })
        .then(editor => {
            window.editor = editor;
        })
        .catch(error => {
            console.error('Oops, something went wrong!');
            console.error('Please, report the following error on https://github.com/ckeditor/ckeditor5/issues with the build id and the error stack trace:');
            console.warn('Build id: k1wwggsboouu-77bwk5kv8b9a');
            console.error(error);
        });
</script>

<!-- Script for livesearch -->
<script>
    $(document).ready(function() {
        $('#selectSearch').select2();
    });
</script>

<!-- Image Preview -->
<script>
    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function(e) {
                $('#preview').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }

    $("#imgInp").change(function() {
        readURL(this);
    });
</script>