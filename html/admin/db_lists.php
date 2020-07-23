<?php /*
*    Pi-hole: A black hole for Internet advertisements
*    (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*    Network-wide ad blocking via your own hardware.
*
*    This file is copyright under the latest version of the EUPL.
*    Please see LICENSE file for your rights under this license. */
    require "scripts/pi-hole/php/header.php";
?>

<!-- Sourceing CSS colors from stylesheet to be used in JS code -->
<span class="queries-permitted"></span>
<span class="queries-blocked"></span>

<!-- Title -->
<div class="page-header">
    <h1>Obliczenia Top list z bazy danych zapytań Pi-hole</h1>
</div>

<div class="row">
  <div class="col-md-12">
    <div class="box">
      <div class="box-header with-border">
        <h3 class="box-title">
          Wybierz zakres dat i godzin
        </h3>
      </div>
      <div class="box-body">
        <div class="row">
          <div class="form-group col-md-12">
            <div class="input-group">
              <div class="input-group-addon">
                <i class="far fa-clock"></i>
              </div>
              <input type="button" class="form-control pull-right" id="querytime" value="Kliknij, aby wybrać zakres dat i godzin">
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>

<div id="timeoutWarning" class="alert alert-warning alert-dismissible fade in" role="alert" hidden>
    W zależności od tego, jak duży zakres został określony, żądanie może przekroczyć limit czasu, podczas gdy Pi-hole spróbuje pobrać wszystkie dane.<br/><span id="err"></span>
</div>

<?php
if($boxedlayout)
{
	$tablelayout = "col-md-6";
}
else
{
	$tablelayout = "col-md-6 col-lg-4";
}
?>
<div class="row">
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="domain-frequency">
        <div class="box-header with-border">
          <h3 class="box-title">Top Domeny</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Domena</th>
                    <th>Trafienia</th>
                    <th>Częstotliwość</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay" hidden>
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="ad-frequency">
        <div class="box-header with-border">
          <h3 class="box-title">Top Zablokowane domeny</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Domena</th>
                    <th>Trafienia</th>
                    <th>Częstotliwość</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay" hidden>
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
    <div class="<?php echo $tablelayout; ?>">
      <div class="box" id="client-frequency">
        <div class="box-header with-border">
          <h3 class="box-title">Top Klienci</h3>
        </div>
        <!-- /.box-header -->
        <div class="box-body">
            <div class="table-responsive">
                <table class="table table-bordered">
                  <tbody>
                    <tr>
                    <th>Domena</th>
                    <th>Trafienia</th>
                    <th>Częstotliwość</th>
                    </tr>
                  </tbody>
                </table>
            </div>
        </div>
        <div class="overlay" hidden>
          <i class="fa fa-sync fa-spin"></i>
        </div>
        <!-- /.box-body -->
      </div>
      <!-- /.box -->
    </div>
    <!-- /.col -->
</div>

<script src="scripts/vendor/daterangepicker.min.js"></script>
<script src="scripts/pi-hole/js/utils.js"></script>
<script src="scripts/pi-hole/js/db_lists.js"></script>

<?php
    require "scripts/pi-hole/php/footer.php";
?>
