<?php /*
*    Pi-hole: A black hole for Internet advertisements
*    (c) 2019 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license. */
    require "scripts/pi-hole/php/header.php";
?>

<!-- Title -->
<div class="page-header">
    <h1>Zarządzanie grupami klientów</h1>
</div>

<!-- Domain Input -->
<div class="row">
    <div class="col-md-12">
        <div class="box" id="add-client">
            <!-- /.box-header -->
            <div class="box-header with-border">
                <h3 class="box-title">
                    Dodaj nowego klienta
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="select">Znani klienci:</label>
                        <select id="select" class="form-control" placeholder="">
                            <option disabled selected>Ładowanie...</option>
                        </select><br>
                        <input id="ip-custom" type="text" class="form-control" disabled placeholder="Client IP address (IPv4 or IPv6, CIDR subnetting available, optional)" autocomplete="off" spellcheck="false" autocapitalize="none" autocorrect="off">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="new_comment">Komentarz:</label>
                        <input id="new_comment" type="text" class="form-control" placeholder="Client description (optional)">
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <button type="button" id="btnAdd" class="btn btn-primary pull-right">Dodaj</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box" id="clients-list">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Lista skonfigurowanych klientów
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="clientsTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Adres IP</th>
                        <th>Komentarz</th>
                        <th>Zadanie grupowe</th>
                        <th>Akcja</th>
                    </tr>
                    </thead>
                </table>
                <button type="button" id="resetButton" class="btn btn-default btn-sm text-red hidden">Zresetuj sortowanie</button>
            </div>
            <!-- /.box-body -->
        </div>
        <!-- /.box -->
    </div>
</div>

<script src="scripts/vendor/bootstrap-select.min.js"></script>
<script src="scripts/vendor/bootstrap-toggle.min.js"></script>
<script src="scripts/pi-hole/js/ip-address-sorting.js"></script>
<script src="scripts/pi-hole/js/utils.js"></script>
<script src="scripts/pi-hole/js/groups-clients.js"></script>

<?php
require "scripts/pi-hole/php/footer.php";
?>
