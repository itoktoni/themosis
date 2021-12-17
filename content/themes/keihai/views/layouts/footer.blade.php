<div id="footer-wrapper" class="footer-dark">
    <footer id="footer">
        <div class="container">
            <div class="row">

                <ul class="col-md-4 col-sm-6 footer-widget-container clearfix">
                    <li class="widget widget_newsletterwidget">

                        {!! get_option('website_newsletter') !!}
                        {!! do_shortcode('[fluentform id="2"]') !!}

                    </li>
                </ul>

                <ul class="col-md-5 col-sm-6 footer-widget-container">
                    <li class="widget widget-text">
                        {!! get_option('website_address') !!}
                    </li>
                </ul>

                <ul class="col-md-3 col-sm-6 footer-widget-container widget-marketing">
                    {!! get_option('website_marketing') !!}
                </ul>

            </div>
        </div>
    </footer>

    <div class="copyright-container">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <p>KEI HAI. All RIGHTS RESERVED.</p>
                </div>

                <div class="col-md-6">
                    <p class="align-right">{{ get_option('created_by') }}</p>
                </div>
            </div>
        </div>
    </div>

    <a href="" class="scroll-up">Scroll</a>
</div>

<script type="text/javascript">
    window.fluent_form_ff_form_instance_2_2 = {
        "id": "2",
        "settings": {
            "layout": {
                "labelPlacement": "top",
                "helpMessagePlacement": "with_label",
                "errorMessagePlacement": "inline",
                "asteriskPlacement": "asterisk-right"
            },
            "restrictions": {
                "denyEmptySubmission": {
                    "enabled": false
                }
            }
        },
        "form_instance": "ff_form_instance_2_2",
        "form_id_selector": "fluentform_2",
        "rules": {
            "email": {
                "required": {
                    "value": true,
                    "message": "This field is required"
                },
                "email": {
                    "value": true,
                    "message": "This field must contain a valid email"
                }
            }
        }
    };
</script>