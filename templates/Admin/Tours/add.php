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

    <form class="row" action="" method="POST">
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
                                    <label for="tourName">Tour Name</label>
                                    <input type="text" name="tourName" id="tourName" class="form-control">
                                </div>
                            </div>
                            <div class="row">
                                <div class="col my-2">
                                    <label for="tourName">Tour Dates</label>
                                    <textarea name="tourDates" id="" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="row my-1">
                                <div class="col form-group">
                                    <label for="tourDescription">Tour Description</label>
                                    <div class="editor border rounded mb-0">
                                        <h2>Bilingual Personality Disorder</h2>
                                        <figure class="image image-style-side"><img src="https://c.cksource.com/a/1/img/docs/sample-image-bilingual-personality-disorder.jpg">
                                            <figcaption>One language, one person.</figcaption>
                                        </figure>
                                        <p>
                                            This may be the first time you hear about this made-up disorder but
                                            it actually isn’t so far from the truth. Even the studies that were conducted almost half a century show that
                                            <strong>the language you speak has more effects on you than you realise</strong>.
                                        </p>
                                        <p>
                                            One of the very first experiments conducted on this topic dates back to 1964.
                                            <a href="https://www.researchgate.net/publication/9440038_Language_and_TAT_content_in_bilinguals">In the experiment</a>
                                            designed by linguist Ervin-Tripp who is an authority expert in psycholinguistic and sociolinguistic studies,
                                            adults who are bilingual in English in French were showed series of pictures and were asked to create 3-minute stories.
                                            In the end participants emphasized drastically different dynamics for stories in English and French.
                                        </p>
                                        <p>
                                            Another ground-breaking experiment which included bilingual Japanese women married to American men in San Francisco were
                                            asked to complete sentences. The goal of the experiment was to investigate whether or not human feelings and thoughts
                                            are expressed differently in <strong>different language mindsets</strong>.
                                            <Here>is a sample from the the experiment:</Here>
                                        </p>
                                        <table>
                                            <thead>
                                                <tr>
                                                    <th></th>
                                                    <th>English</th>
                                                    <th>Japanese</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <tr>
                                                    <td>Real friends should</td>
                                                    <td>Be very frank</td>
                                                    <td>Help each other</td>
                                                </tr>
                                                <tr>
                                                    <td>I will probably become</td>
                                                    <td>A teacher</td>
                                                    <td>A housewife</td>
                                                </tr>
                                                <tr>
                                                    <td>When there is a conflict with family</td>
                                                    <td>I do what I want</td>
                                                    <td>It's a time of great unhappiness</td>
                                                </tr>
                                            </tbody>
                                        </table>
                                        <p>
                                            More recent <a href="https://books.google.pl/books?id=1LMhWGHGkRUC">studies</a> show, the language a person speaks affects
                                            their cognition, behaviour, emotions and hence <strong>their personality</strong>.
                                            This shouldn’t come as a surprise
                                            <a href="https://en.wikipedia.org/wiki/Lateralization_of_brain_function">since we already know</a> that different regions
                                            of the brain become more active depending on the person’s activity at hand. Since structure, information and especially
                                            <strong>the culture</strong> of languages varies substantially and the language a person speaks is an essential element of daily life.
                                        </p>
                                    </div>
                                </div>
                            </div>
                            <div class="row my-2">
                                <div class="col">
                                    <label for="tourCities">Tour Cities</label>
                                    <textarea id="tourCities" class="form-control" name="tourCities">ATHENS – KALAMBAKA – BITOLA – OHRID – TIRANA – BAR – PODGORICA – BUDVA – KOTOR – TIVAT – DUBROVNIK – POCITELJ – BLAGAJ – MOSTAR – SARAJEVO – AHMICI – TRAVNIK – JAJCE - BIHAC – PLITVICE LAKES – ZAGREB</textarea>
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
                                        <select class="form-control mx-0" id="selectSearch" name="airlines" style="width: 50%;">
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
                                        <thead class="bg-light">
                                            <tr>
                                                <th class="text-center align-middle">Day</th>
                                                <th class="text-center align-middle">Airline</th>
                                                <th class="text-center align-middle">Sector</th>
                                                <th class="text-center align-middle">ETD</th>
                                                <th class="text-center align-middle">ETA</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="day1" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="airline1" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="sector1" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="etd1" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="eta1" id="" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="day2" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="airline2" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="sector2" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="etd2" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="eta2" id="" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="day3" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="airline3" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="sector3" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="etd3" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="eta3" id="" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="day4" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="airline4" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="sector4" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="etd4" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="eta4" id="" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="day5" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="airline5" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="sector5" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="etd5" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="eta5" id="" class="form-control">
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
                                                    <input type="text" name="tourTwn" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="tourSgl" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="tourCtw" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="tourCwb" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="tourCnb" id="" class="form-control">
                                                </td>
                                            </tr>
                                            <tr>
                                                <th class="text-center align-middle">
                                                    Senior Citizen
                                                </th>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="tourTwn" id="" class="form-control">
                                                </td>
                                                <td class="text-center align-middle">
                                                    <input type="text" name="tourSgl" id="" class="form-control">
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
                            <input type='file' id="imgInp" name="tourImage form-control no-border">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Status</label>
                        <div class="col-md-9">
                            <select class="form-control" name="tourStatus">
                                <option value="Yes" selected>Enabled</option>
                                <option value="No">Disabled</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Meals</label>
                        <div class="col-md-9">
                            <select class="form-control" name="tourMeals">
                                <option value="Half-Board">Half-Board</option>
                                <option value="Full-Board" selected>Full-Board</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Hotel Rating</label>
                        <div class="col-md-9">
                            <select class="form-control" name="hotelRating">
                                <option value="1">⭐</option>
                                <option value="2">⭐⭐</option>
                                <option value="3">⭐⭐⭐</option>
                                <option value="4">⭐⭐⭐⭐</option>
                                <option value="5">⭐⭐⭐⭐⭐</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Season</label>
                        <div class="col-md-9">
                            <select class="form-control" name="tourSeason">
                                <option value="Spring">Spring</option>
                                <option value="Summer">Summer</option>
                                <option value="Fall">Fall</option>
                                <option value="Winter" selected>Winter</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label class="col-md-3 my-auto control-label text-left">Tour Type</label>
                        <div class="col-md-9">
                            <select class="form-control" name="tourType">
                                <option value="SD">SD</option>
                                <option value="FIT">FIT</option>
                                <option value="SIC">SIC</option>
                                <option value="Academic">Academic</option>
                                <option value="Private">Private</option>
                            </select>
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="Feature" class="col-md-3 my-auto control-label text-left">Feature</label>
                        <div class="col-md-3">
                            <select name="feature" id="" class="form-control">
                                <option value="No">No</option>
                                <option value="Yes">Yes</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="featureDate1" id="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="featureDate2" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="deposit" class="col-md-3 my-auto control-label text-left text-success">Deposit</label>
                        <div class="col-md-5">
                            <select name="depositType" id="" class="form-control">
                                <option value="fixed">Fixed</option>
                                <option value="percentage">Percentage</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <label for="deposit" class="col-md-3 my-auto control-label text-left text-warning">Discount</label>
                        <div class="col-md-5">
                            <select name="depositType" id="" class="form-control">
                                <option value="fixed">Fixed</option>
                                <option value="percentage">Percentage</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <input type="text" name="" id="" class="form-control">
                        </div>
                    </div>
                    <div class="row form-group">
                        <div class="col-md-12">
                            <button class="btn btn-primary" type="submit">Submit</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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