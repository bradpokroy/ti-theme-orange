---
description: 'Static layout for static pages'
'[session]':
    security: all
'[staticPage]': null
'[staticMenu mainMenu]':
    code: main-menu
'[staticMenu footerMenu]':
    code: footer-menu
'[staticMenu pagesSideMenu]':
    code: pages-menu
'[newsletter]': {  }
'[localSearch]':
    hideSearch: 1
    menusPage: home
'[localBox]':
    paramFrom: location
    redirect: home
    defaultOrderType: delivery
    hideSearch: 1
    showLocalThumb: 0
    localThumbWidth: !!float 80
    localThumbHeight: !!float 80
    menusPage: home
    localBoxTimeFormat: 'h:mm a'
    openingTimeFormat: 'ddd h:mm a'
    timePickerDateFormat: 'ddd DD'
    timePickerDateTimeFormat: 'ddd DD h:mm a'
    cartBoxAlias: cartBox
'[localList]':
    alias: '[localList]'
    distanceUnit: km
    openingTimeFormat: 'ddd HH:mm'
---
<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="<?= App::getLocale(); ?>">
<head>
    <?= partial('head'); ?>
</head>
<body class="<?= $this->page->bodyClass; ?>">

    <header class="header">
        <?= partial('header'); ?>
    </header>

    <main role="main">
        <div id="page-wrapper">
            <div class="container py-4">
                <div id="heading" class="heading-section py-4">
                    <h2><?= $this->page->title; ?></h2>
                </div>

                <div class="row">
<!--                    <div class="col-sm-3">-->
<!--                        <= partial('nav/pages_menu'); ?>-->
<!--                    </div>-->
                    <div class="col-sm-12">
                        <div class="card">
                            <div class="card-body">
                                <?= page(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </main>

    <footer class="pt-5">
        <?= partial('footer'); ?>
    </footer>
    <div id="notification">
        <?= partial('flash'); ?>
    </div>
    <?= partial('eucookiebanner'); ?>
    <?= partial('scripts'); ?>
</body>
</html>