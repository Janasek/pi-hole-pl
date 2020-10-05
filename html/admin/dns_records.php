<?php /*
*    Pi-hole: A black hole for Internet advertisements
*    (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license. */
    require "scripts/pi-hole/php/header.php";

?>

<!-- Title -->
<div class="page-header">
    <h1>Lokalne rekordy DNS</h1>
    <small>Na tej stronie, możesz dodać powiązania domeny / IP</small>
</div>

<!-- Domain Input -->
<div class="row">
    <div class="col-md-12">
        <div class="box">
            <!-- /.box-header -->
            <div class="box-header with-border">
                <h3 class="box-title">
                    Dodaj nową kombinację domeny / adresu IP
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="domain">Domena:</label>
                        <input id="domain" type="url" class="form-control" placeholder="Dodaj domenę (example.com lub sub.example.com)" autocomplete="off" spellcheck="false" autocapitalize="none" autocorrect="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="ip">Addres IP:</label>
                        <input id="ip" type="text" class="form-control" placeholder="Powiązany adres IP" autocomplete="off" spellcheck="false" autocapitalize="none" autocorrect="off">
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <button type="button" id="btnAdd" class="btn btn-primary pull-right">Add</button>
            </div>
        </div>
    </div>
</div>

<!-- Alerts -->
<div id="alInfo" class="alert alert-info alert-dismissible fade in" role="alert" hidden>
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Aktualizowanie niestandardowych wpisów DNS ...
</div>
<div id="alSuccess" class="alert alert-success alert-dismissible fade in" role="alert" hidden>
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Sukces! Lista zostanie odświeżona.
</div>
<div id="alFailure" class="alert alert-danger alert-dismissible fade in" role="alert" hidden>
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Niepowodzenie! Coś poszło nie tak, zobacz wyniki poniżej:<br/><br/><pre><span id="err"></span></pre>
</div>
<div id="alWarning" class="alert alert-warning alert-dismissible fade in" role="alert" hidden>
    <button type="button" class="close" data-hide="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
    Co najmniej jedna domena była już obecna, zobacz wyniki poniżej:<br/><br/><pre><span id="warn"></span></pre>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box" id="recent-queries">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Lista lokalnych domen DNS
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="customDNSTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>Domena</th>
                        <th>IP</th>
                        <th>Akcja</th>
                    </tr>
                    </thead>
                </table>
                <button type="button" id="resetButton" class="btn btn-default btn-sm text-red hidden">Wyczyść filtry</button>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script src="scripts/pi-hole/js/utils.js"></script>
<script src="scripts/pi-hole/js/ip-address-sorting.js"></script>
<script src="scripts/pi-hole/js/customdns.js"></script>

<?php
require "scripts/pi-hole/php/footer.php";
?>
