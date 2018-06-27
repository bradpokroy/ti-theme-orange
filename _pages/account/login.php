---
title: main::default.account.login.title
layout: default
permalink: /login

'[account]':
    security: guest
---
<div class="container">
    <div class="row">
        <div class="col-sm-4 mx-auto my-5">
            <div class="card">
                <div class="card-body">
                    <h1 class="card-title h4 mb-4 font-weight-normal">
                        <?= lang('main::default.account.login.text_login'); ?>
                    </h1>

                    <?= partial('account::login'); ?>

                    <div class="row">
                        <div class="col-md-5 p-sm-0">
                            <a class="btn btn-link btn-lg" href="<?= site_url('account/reset'); ?>">
                                <span class="small"><?= lang('main::default.account.login.text_forgot'); ?></span>
                            </a>
                        </div>
                        <div class="col-sm-7">
                            <a
                                class="btn btn-outline-default btn-block btn-lg"
                                href="<?= site_url('account/register'); ?>"
                            ><?= lang('main::default.account.login.button_register'); ?>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
