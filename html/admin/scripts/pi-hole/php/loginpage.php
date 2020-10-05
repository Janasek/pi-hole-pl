<?php
/* Pi-hole: A black hole for Internet advertisements
*  (c) 2017 Pi-hole, LLC (https://pi-hole.net)
*  Network-wide ad blocking via your own hardware.
*
*  This file is copyright under the latest version of the EUPL.
*  Please see LICENSE file for your rights under this license. */ ?>

<div class="mainbox col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2" style="float:none">
  <div class="panel panel-default">
    <div class="panel-heading">
      <div class="text-center">
        <img src="img/logo.svg" alt="Pi-hole logo" style="width: <?php if ($boxedlayout) { ?>50%<?php } else { ?>30%<?php } ?>;">
      </div>
      <br>

      <div class="panel-title text-center"><span class="logo-lg" style="font-size: 25px;">Pi-<b>hole</b></span></div>
      <p class="login-box-msg">Zaloguj się, aby rozpocząć sesję</p>
      <div id="cookieInfo" class="panel-title text-center text-red" style="font-size: 150%" hidden>Sprawdź, czy pliki cookie są dozwolone dla <code><?php echo $_SERVER['HTTP_HOST']; ?></code></div>
      <?php if ($wrongpassword) { ?>
        <div class="form-group has-error login-box-msg">
          <label class="control-label"><i class="fa fa-times-circle"></i> Złe hasło!</label>
        </div>
      <?php } ?>
    </div>

    <div class="panel-body">
      <form action="" id="loginform" method="post">
        <div class="form-group has-feedback <?php if ($wrongpassword) { ?>has-error<?php } ?>">
          <input type="password" id="loginpw" name="pw" class="form-control" placeholder="Password" autofocus>
          <span class="fa fa-key form-control-feedback"></span>
        </div>
        <div class="row">
          <div class="col-xs-8 hidden-xs hidden-sm">
          <ul>
            <li><kbd>Return</kbd> &rarr; Zaloguj się i przejdź do żądanej strony (<?php echo $scriptname; ?>)</li>
            <li><kbd>Ctrl</kbd>+<kbd>Return</kbd> &rarr; Zaloguj się i przejdź do strony Ustawienia</li>
          </ul>
          </div>
          <div class="col-xs-12 col-md-4">
              <div class="pull-right">
                <div>
                  <input type="checkbox" id="logincookie" name="persistentlogin">
                  <label for="logincookie">Zapamiętaj przez 7 dni</label>
                </div>
            </div>
            <button type="submit" class="btn btn-primary pull-right"><i class="fas fa-sign-in-alt"></i>&nbsp;&nbsp;&nbsp;Log in</button>
          </div>
        </div>
        <br>
        <div class="row">
          <div class="col-xs-12">
            <div class="box box-<?php if (!$wrongpassword) { ?>info<?php } else { ?>danger<?php }
            if (!$wrongpassword) { ?> collapsed-box<?php } ?> box-solid">
              <div class="box-header with-border">
                <h3 class="box-title">Zapomniałeś hasła</h3>

                <div class="box-tools pull-right">
                  <button type="button" class="btn btn-box-tool" data-widget="collapse"><i
                      class="fa <?php if ($wrongpassword) { ?>fa-minus<?php } else { ?>fa-plus<?php } ?>"></i>
                  </button>
                </div>
              </div>
              <div class="box-body">
                Po zainstalowaniu Pi-hole po raz pierwszy generowane jest hasło i wyświetlane użytkownikowi. Plik
                 hasła nie można później odzyskać, ale można ustawić nowe hasło (lub jawnie wyłączyć
                 hasło, ustawiając puste hasło) za pomocą polecenia
                <pre>sudo pihole -a -p</pre>
              </div>
            </div>
          </div>
        </div>
      </form>
    </div>
  </div>
</div>
