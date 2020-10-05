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
    <h1>Zarządzanie grupami</h1>
</div>

<!-- Group Input -->
<div class="row">
    <div class="col-md-12">
        <div class="box" id="add-group">
            <!-- /.box-header -->
            <div class="box-header with-border">
                <h3 class="box-title">
                    Dodaj nową grupę
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <div class="row">
                    <div class="form-group col-md-6">
                        <label for="new_name">Nazwa:</label>
                        <input id="new_name" type="text" class="form-control" placeholder="Group name or space-separated group names">
                    </div>
                    <div class="form-group col-md-6">
                        <label for="new_desc">Opis:</label>
                        <input id="new_desc" type="text" class="form-control" placeholder="Group description (optional)">
                    </div>
                </div>
            </div>
            <div class="box-footer clearfix">
                <strong>Podpowiedź:</strong>
                <ol>
                    <li>Wiele grup można dodać, oddzielając nazwy każdej grupy spacją</li>
                    <li>Nazwy grup mogą zawierać spacje, jeśli zostaną wprowadzone w cudzysłowach. np. „Moja nowa grupa”</li>
                </ol>
                <button type="button" id="btnAdd" class="btn btn-primary pull-right">Dodaj</button>
            </div>
        </div>
    </div>
</div>
<div class="row">
    <div class="col-md-12">
        <div class="box" id="groups-list">
            <div class="box-header with-border">
                <h3 class="box-title">
                    Lista skonfigurowanych grup
                </h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
                <table id="groupsTable" class="table table-striped table-bordered" width="100%">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nazwa</th>
                        <th>Status</th>
                        <th>Opis</th>
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
<script src="scripts/pi-hole/js/utils.js"></script>
<script src="scripts/pi-hole/js/groups.js"></script>

<?php
require "scripts/pi-hole/php/footer.php";
?>
