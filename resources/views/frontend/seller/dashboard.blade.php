@extends('frontend.layouts')
@section('content')
  <form id="applepay_form" action="/checkout/applepay" accept-charset="UTF-8" method="post"><input name="utf8"
      type="hidden" value="&#x2713;" autocomplete="off" /><input type="hidden" name="authenticity_token"
      value="v0SVpV8+fqHL263nRiqlUY22iQ32u7fmVxWwKCwgf/YuoJv+NoiOU/ZeLlSuupcFzpESjvsR0wHzxo/ZuqKVFw=="
      autocomplete="off" /><input type="hidden" name="applepay_nonce" id="applepay_nonce" autocomplete="off" /><input
      type="hidden" name="applepay_address" id="applepay_address" autocomplete="off" /><input type="hidden"
      name="applepay_shipping" id="applepay_shipping" autocomplete="off" /><input type="hidden"
      name="checkout[payment_option]" id="checkout_payment_option" value="ApplePay" autocomplete="off" /></form>


  <div class='main-wrapper'>
    <div id='site'>
      <div id='fb-root'></div>
      <noscript>
        <div class='no-js-warning'>
          You have Javascript disabled. Javascript is required for this site to function properly.
          Please enable Javascript and return here.
        </div>
      </noscript>
      <div id='content'>
        <div class='flash x'>
        </div>
        <section class='contain m-account contain--wide-1'>

          <div class='page-head'>
            <h1 class='h__h1'>
              My Account
            </h1>
            <div class='page-head__actions'>

            </div>
          </div>
          <div class='content-table jsMAccountContent'>
            <div class='content-table__head jsNavCtrl'>
              <h2 class='h__h2--primary h--no-s h--icon'>
                <span class="teepublicon teepublicon--dark-default teepublicon-background--transparent"><svg
                    xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" width="28" height="28" focusable="false"
                    aria-hidden="true">
                    <path fill-rule="evenodd"
                      d="m34.517 11.889.686-4.163c.332-2.013-1.211-3.946-3.215-3.706-2.338.28-4.964 1.097-6.735 3.44a19.603 19.603 0 0 0-3.294-.277c-4.751 0-9.071 1.695-12.283 4.464-3.819-4.188-8.057.242-3.153 3.601C4.92 17.718 4 20.605 4 23.69c0 3.093.926 5.988 2.537 8.463-.139.323-.25.664-.332 1.02l-.854 3.753c-.708 3.11 1.212 6.21 4.288 6.925 3.075.716 6.142-1.225 6.85-4.334l.02-.094.197.058c1.647.482 3.218.942 5.044.942 1.477 0 2.415-.222 3.361-.446.27-.063.541-.127.825-.186.82 2.948 3.797 4.755 6.781 4.06 3.015-.7 4.918-3.694 4.327-6.74l5.15-2.605A3.305 3.305 0 0 0 44 31.553V23.69c0-1.824-1.462-3.302-3.265-3.302h-1.176c-.728-3.296-2.524-6.235-5.042-8.5ZM22.182 15.01a9.372 9.372 0 0 0-3.033.215c-1.162.277-1.936.734-2.396 1.082a3.85 3.85 0 0 0-.474.418 1.704 1.704 0 0 0-.076.085 2.104 2.104 0 0 1-2.934.445c-.947-.694-1.143-2.022-.473-2.992a2.13 2.13 0 0 1 .127-.165l.013-.017c.07-.084.16-.19.277-.313.231-.246.56-.558.997-.89.879-.665 2.18-1.398 3.967-1.824a13.565 13.565 0 0 1 4.399-.31c.558.052 1.014.132 1.342.202a8.526 8.526 0 0 1 .584.147h.003a2.147 2.147 0 0 1 1.404 2.677 2.115 2.115 0 0 1-2.633 1.425l-.031-.01a7.651 7.651 0 0 0-1.063-.176Zm10.545 7.845c1.38 0 2.5-1.343 2.5-3s-1.12-3-2.5-3c-1.381 0-2.5 1.343-2.5 3s1.119 3 2.5 3Z"
                      clip-rule="evenodd"></path>
                  </svg></span>
                <span>My Sales</span>
              </h2>

              <span
                class="teepublicon teepublicon--dark-default teepublicon-background--transparent m-account-nav__ctrl"><svg
                  xmlns="http://www.w3.org/2000/svg" viewbox="0 0 50 50" width="16" height="16" focusable="false"
                  aria-hidden="true">
                  <path
                    d="M10.032 6.295 28.742 25l-18.71 18.705a1.058 1.058 0 0 0 0 1.496l4.49 4.49a1.059 1.059 0 0 0 1.497 0l23.949-23.943a1.058 1.058 0 0 0 0-1.496l-4.49-4.49-.002-.001L16.019.31a1.058 1.058 0 0 0-1.496 0l-4.49 4.489a1.058 1.058 0 0 0 0 1.496Z">
                  </path>
                </svg></span>
            </div>
            <div class='content-table__body m-account__body'>
             <div class='content-table__body-head'>
  <nav class='side-nav m-account-nav jsAccountNav'>
    <ul>
      <li class="side-nav__section">
        <span class="h--4 side-nav__h">Monies</span>
        <ul>
          <li class="side-nav__nav">
            <a class="side-nav__link link--strong" href="index.php">
              <span class="teepublicon teepublicon--blue-default teepublicon-background--transparent side-nav__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20" height="20" focusable="false" aria-hidden="true">
                  <path fill-rule="evenodd" d="m34.517 11.889.686-4.163c.332-2.013-1.211-3.946-3.215-3.706-2.338.28-4.964 1.097-6.735 3.44a19.603 19.603 0 0 0-3.294-.277c-4.751 0-9.071 1.695-12.283 4.464-3.819-4.188-8.057.242-3.153 3.601C4.92 17.718 4 20.605 4 23.69c0 3.093.926 5.988 2.537 8.463-.139.323-.25.664-.332 1.02l-.854 3.753c-.708 3.11 1.212 6.21 4.288 6.925 3.075.716 6.142-1.225 6.85-4.334l.02-.094.197.058c1.647.482 3.218.942 5.044.942 1.477 0 2.415-.222 3.361-.446.27-.063.541-.127.825-.186.82 2.948 3.797 4.755 6.781 4.06 3.015-.7 4.918-3.694 4.327-6.74l5.15-2.605A3.305 3.305 0 0 0 44 31.553V23.69c0-1.824-1.462-3.302-3.265-3.302h-1.176c-.728-3.296-2.524-6.235-5.042-8.5ZM22.182 15.01a9.372 9.372 0 0 0-3.033.215c-1.162.277-1.936.734-2.396 1.082a3.85 3.85 0 0 0-.474.418 1.704 1.704 0 0 0-.076.085 2.104 2.104 0 0 1-2.934.445c-.947-.694-1.143-2.022-.473-2.992a2.13 2.13 0 0 1 .127-.165l.013-.017c.07-.084.16-.19.277-.313.231-.246.56-.558.997-.89.879-.665 2.18-1.398 3.967-1.824a13.565 13.565 0 0 1 4.399-.31c.558.052 1.014.132 1.342.202a8.526 8.526 0 0 1 .584.147h.003a2.147 2.147 0 0 1 1.404 2.677 2.115 2.115 0 0 1-2.633 1.425l-.031-.01a7.651 7.651 0 0 0-1.063-.176Zm10.545 7.845c1.38 0 2.5-1.343 2.5-3s-1.12-3-2.5-3c-1.381 0-2.5 1.343-2.5 3s1.119 3 2.5 3Z" clip-rule="evenodd"></path>
                </svg></span>
              <span class="side-nav__nav-text">My Sales</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="side-nav__section">
        <span class="h--4 side-nav__h">My Store</span>
        <ul>
          <li class="side-nav__nav">
            <a class="side-nav__link link--strong" href="store-detail.php">
              <span class="teepublicon teepublicon--blue-default teepublicon-background--transparent side-nav__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20" height="20" focusable="false" aria-hidden="true">
                  <path fill-rule="evenodd" d="M9.89 4.53A1.959 1.959 0 0 0 8.2 5.711c-.695 1.624-1.975 4.7-2.684 6.937-.554 1.753-1.1 4.084-1.47 5.786a1.949 1.949 0 0 0 1.83 2.364l1.99.084c-.205 2.297-.205 4.25-.205 7.027 0 3.665 0 5.881.472 9.372.473 3.492 2.857 5.78 6.345 6.249 3.487.469 5.795.469 9.516.469 3.72 0 5.997 0 9.516-.47 3.519-.469 5.86-2.738 6.344-6.248.483-3.51.483-5.707.483-9.372 0-2.77 0-4.745-.209-7.027.742-.03 1.414-.059 1.993-.084a1.949 1.949 0 0 0 1.831-2.364c-.37-1.702-.916-4.033-1.47-5.786-.709-2.238-1.99-5.313-2.685-6.937a1.959 1.959 0 0 0-1.69-1.183C35.392 4.37 28.675 4 24 4s-11.392.368-14.109.53Zm2.336 16.517c3.82.132 8.235.25 11.773.25 3.458 0 7.755-.112 11.514-.24.078.19.14.397.208.618l.032.106c.363 1.18.363 1.963.363 3.223 0 1.26 0 2.016-.363 3.222l-.019.064c-.35 1.17-.577 1.926-3.17 2.085-2.639.161-5.915.161-8.706.161-2.79 0-5.937 0-8.553-.161-2.616-.162-2.987-.948-3.342-2.149-.354-1.2-.354-1.962-.354-3.222s0-2.026.354-3.223c.079-.265.158-.51.263-.734Z" clip-rule="evenodd"></path>
                </svg></span>
              <span class="side-nav__nav-text">Edit Storefront</span>
            </a>
          </li>
          <li class="side-nav__nav">
            <a class="side-nav__link link--strong" href="album.php">
              <span class="teepublicon teepublicon--blue-default teepublicon-background--transparent side-nav__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 48 48" width="20" height="20" focusable="false" aria-hidden="true">
                  <path fill-rule="evenodd" d="M12.344 4.577c-4.272.576-7.187 3.442-7.766 7.769C4 16.672 4 19.442 4 23.997c0 4.556 0 7.312.58 11.652.578 4.34 3.496 7.184 7.766 7.768C16.616 44 19.44 44 23.995 44c4.555 0 7.341 0 11.649-.584 4.308-.584 7.174-3.405 7.766-7.769.59-4.363.59-7.095.59-11.651 0-4.557 0-7.384-.592-11.652-.591-4.269-3.42-7.191-7.766-7.768C31.297 4 28.548 4 23.992 4c-4.554 0-7.376.002-11.648.577ZM31.166 21.75a5 5 0 1 0-.097-9.999 5 5 0 0 0 .097 9.999Zm-17.5 16.947c-4.213-.39-4.374-2.21-4.703-5.95l-.03-.342c-.16-1.792-.156-4.005-.152-5.9l.001-.745c-.03-.745.471-1.4 1.174-1.474 4.689-.488 9.25 1.15 12.633 4.445 2.519 2.453 4.384 5.713 5.395 9.375.071.256.295 1.104-.377 1.104l-1.538.002h-.003c-4.262.008-8.44.016-12.4-.515Zm18.948-1.689c.447 1.275.703 2.007 1.228 2.007 4.432.05 5.045-4.491 5.358-7.883a.719.719 0 0 0-.526-.762 17.277 17.277 0 0 0-8.255-.206c-.521.114-.895.473-.424 1.162 1.455 2.358 2.145 4.327 2.62 5.682Z" clip-rule="evenodd"></path>
                </svg></span>
              <span class="side-nav__nav-text">My Albums</span>
            </a>
          </li>
        </ul>
      </li>
      <li class="side-nav__section">
        <span class="h--4 side-nav__h">Image Security</span>
        <ul>
          <li class="side-nav__nav">
            <a class="side-nav__link link--strong" href="watermarking.php">
              <span class="teepublicon teepublicon--blue-default teepublicon-background--transparent side-nav__icon"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 50 50" width="16" height="16" focusable="false" aria-hidden="true">
                  <path fill-rule="evenodd" d="M9.445 23.616c-1.204 3.194-1.806 6.03-1.806 8.509 0 3.241.776 6.232 2.326 8.973 1.551 2.741 3.658 4.91 6.32 6.507C18.947 49.202 21.852 50 25 50c3.148 0 6.053-.798 8.715-2.395s4.769-3.766 6.32-6.507c1.55-2.74 2.326-5.732 2.326-8.973 0-2.48-.602-5.315-1.806-8.51-1.018-2.716-2.453-5.648-4.305-8.794-1.482-2.479-3.194-5.053-5.139-7.722a101.089 101.089 0 0 0-4.306-5.506L25.763.355a.998.998 0 0 0-1.526 0l-1.042 1.238A101.138 101.138 0 0 0 18.889 7.1c-1.944 2.67-3.657 5.243-5.139 7.722-1.852 3.146-3.287 6.078-4.305 8.795ZM27.916 40.62c-.892-.865-1.339-1.911-1.339-3.137s.447-2.29 1.34-3.192c.892-.901 1.945-1.352 3.159-1.352 1.214 0 2.267.45 3.16 1.352.892.902 1.339 1.966 1.339 3.192 0 1.226-.438 2.272-1.313 3.137-.874.866-1.928 1.299-3.16 1.299-1.231 0-2.293-.433-3.186-1.299Z" clip-rule="evenodd"></path>
                </svg></span>
              <span class="side-nav__nav-text">Watermarking</span>
            </a>
          </li>
        </ul>
      </li>
      <li class='side-nav__section'>
        <span class='h--4 side-nav__h'>My Account</span>
        <ul>
          <li class='side-nav__nav'>
            <a class='side-nav__link link--strong' href='order-history.php'>
              <span class="teepublicon teepublicon--blue-default teepublicon-background--transparent side-nav__icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" width="20" height="20" focusable="false" aria-hidden="true">
                  <path d="M38.652 14.318c-.75.414-1.62.892-2.556 1.404L18.694 5.944a252.71 252.71 0 0 1 2.536-1.289 6.182 6.182 0 0 1 5.54 0c2.01 1.007 4.716 2.395 6.73 3.543 1.98 1.13 4.512 2.723 6.362 3.912.412.264.785.573 1.116.918l-.383.213c-.467.26-1.136.631-1.943 1.077ZM26.111 44a6.16 6.16 0 0 0 .66-.284c2.008-1.007 4.715-2.394 6.73-3.543 1.98-1.129 4.51-2.723 6.361-3.911a6.013 6.013 0 0 0 2.763-4.58c.175-2.199.375-5.205.375-7.496 0-2.22-.188-5.11-.359-7.288a728.66 728.66 0 0 1-4.852 2.673v5.122c0 .388-.217.743-.563.924l-3.778 1.976c-.703.367-1.548-.137-1.548-.924V22.74c-1.263.666-2.47 1.293-3.522 1.82a57.41 57.41 0 0 1-2.267 1.086V44Zm3.63-24.857-17.217-9.78a202.872 202.872 0 0 0-4.386 2.747 6.117 6.117 0 0 0-1.116.918l.383.213a743.059 743.059 0 0 0 7.928 4.343 255.811 255.811 0 0 0 6.196 3.247c.88.442 1.618.796 2.162 1.035l.309.132c.09-.037.192-.08.309-.132.544-.24 1.281-.593 2.162-1.035.972-.487 2.09-1.066 3.27-1.688ZM21.23 43.716c.215.108.435.203.659.284V25.647a57.343 57.343 0 0 1-2.267-1.086 259.738 259.738 0 0 1-6.306-3.305 666.21 666.21 0 0 1-7.957-4.358C5.187 19.076 5 21.966 5 24.186c0 2.291.2 5.297.375 7.496a6.014 6.014 0 0 0 2.763 4.58c1.85 1.188 4.382 2.782 6.362 3.911 2.014 1.149 4.72 2.536 6.73 3.543Zm2.378-21.573.034-.009a.378.378 0 0 1-.034.01Zm.75-.009a.23.23 0 0 1 .034.01l-.034-.01Z">
                  </path>
                </svg></span>
              <span class='side-nav__nav-text'>Order History</span>
            </a>
          </li>
          <li class='side-nav__nav'>
            <a class='side-nav__link link--strong' href='setting.php'>
              <span class="teepublicon teepublicon--blue-default teepublicon-background--transparent side-nav__icon"><svg xmlns="http://www.w3.org/2000/svg" viewbox="0 0 48 48" width="20" height="20" focusable="false" aria-hidden="true">
                  <path fill-rule="evenodd" d="M22.86 4h2.325a4.327 4.327 0 0 1 4.03 2.75l1.063 2.7 3.232 1.865 2.866-.436a4.33 4.33 0 0 1 4.402 2.118l1.16 2.005a4.324 4.324 0 0 1-.366 4.867l-1.808 2.263v3.738l1.797 2.26a4.33 4.33 0 0 1 .367 4.868L40.768 35a4.337 4.337 0 0 1-4.4 2.12l-2.869-.436-3.237 1.867-1.058 2.696A4.332 4.332 0 0 1 25.176 44h-2.322a4.326 4.326 0 0 1-4.03-2.752l-1.057-2.696-3.238-1.867-2.866.436a4.34 4.34 0 0 1-4.402-2.118l-1.16-2.005a4.325 4.325 0 0 1 .366-4.867l1.808-2.263v-3.736l-1.807-2.263a4.328 4.328 0 0 1-.367-4.867L7.26 13a4.334 4.334 0 0 1 4.401-2.12l2.86.436 3.246-1.878 1.064-2.688A4.327 4.327 0 0 1 22.86 4Zm1.16 27.991c4.418 0 8-3.577 8-7.991s-3.582-7.991-8-7.991-8 3.577-8 7.991 3.582 7.991 8 7.991Z" clip-rule="evenodd"></path>
                </svg></span>
              <span class='side-nav__nav-text'>Settings</span>
            </a>
          </li>
        </ul>
      </li>
    </ul>
  </nav>
</div>
              <div class='content-table__content'>
                <div class='content-table__section m-account__sales'>
                  <div class='h__h3'>Estimated Earnings</div>
                  <div class='m-account__sales-info'>
                    <div class='m-account__sales-info-container'>
                      <div class='m-account__sales-info-container--header'>
                        <span class='h h--5'>Next Payment</span>
                        <p class='text-light-1 text-note--small'>Feb Earnings</p>
                      </div>
                      <div class='callout callout--l1 callout--full-width callout--1'>
                        $0.00
                      </div>
                    </div>

                    <div class='m-account__sales-info-container'>
                      <div class='m-account__sales-info-container--header'>
                        <span class='h h--5'>This Month</span>
                        <p class='text-light-1 text-note--small'>Feb Earnings</p>
                      </div>
                      <div class='callout callout--l1 callout--full-width callout--1'>
                        $0.00
                      </div>
                    </div>

                    <div class='m-account__sales-info-container'>
                      <div class='m-account__sales-info-container--header'>
                        <span class='h h--5'>Total Earned</span>
                        <p class='text-light-1 text-note--small'>Lifetime</p>
                      </div>
                      <div class='callout callout--l1 callout--full-width callout--1'>
                        $0.00
                      </div>
                    </div>

                    <div class='m-account__sales-info-container'>
                      <div class='m-account__sales-info-container--header'>
                        <span class='h h--5'>Items Sold</span>
                        <p class='text-light-1 text-note--small'>Lifetime</p>
                      </div>
                      <div class='callout callout--l1 callout--full-width'>
                        0
                      </div>
                    </div>

                  </div>
                </div>
                <div class='content-table__secion m-account__sales'>
                  <a href="#" class="link tp-btn--medium btn c-link__button link--default">Withdraw</a>
                </div>
                <div class='content-table__section m-account__sales'>
                  <div class='alert-box--cool'>
                    <span class='strong'>
                      IMPORTANT NOTE:
                    </span>
                    It may take
                    <span class='strong'>
                      up to 48 hours for your earnings to update on your account
                    </span>
                    after you made a sale or on pay days (the 15th of each month).
                  </div>
                </div>
                <hr class='hr hr--no-s'>
                <div class='content-table__section m-account__sales'>
                  <div class='h__h3'>Earnings Report</div>
                  <h4 class='h h--5 strong'>Artist Earnings Report</h4>
                  <p class='text-height'>
                    Generates an accurate, real-time sales and earnings report.
                  </p>
                  <a href="#"
                    class="link tp-btn--medium gtmArtistCommissionDownload btn c-link__button link--default tp-btn--icon"><span
                      class="teepublicon teepublicon--light-default teepublicon-background--transparent"><svg
                        xmlns="http://www.w3.org/2000/svg" viewbox="0 0 50 50" width="16" height="16" focusable="false"
                        aria-hidden="true">
                        <path
                          d="M43.873 13.888c.86 0 1.318 1.011.753 1.658L25.74 37.14a1 1 0 0 1-1.506 0L5.35 15.546c-.565-.646-.106-1.658.753-1.658h8.847a1 1 0 0 0 1-1V1a1 1 0 0 1 1-1h16.076a1 1 0 0 1 1 1v11.888a1 1 0 0 0 1 1h8.847ZM1 42a1 1 0 0 0-1 1v6a1 1 0 0 0 1 1h48a1 1 0 0 0 1-1v-6a1 1 0 0 0-1-1H1Z">
                        </path>
                      </svg></span>
                    <span class='link__content'>
                      My Artist Earnings Report

                    </span>

                  </a>
                </div>

              </div>
            </div>
          </div>
        </section>



      </div>
    </div>
  </div> 
 @include('frontend.partials.footer')
  @endsection