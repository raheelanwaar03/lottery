<footer class="pc-footer">
    <div class="footer-wrapper container-fluid">
        <div class="row">
            <div class="col my-1">
                <p class="m-0">{{ env('APP_NAME') }} &#9829; crafted by Team <a href="#"
                        target="_blank">{{ env('APP_NAME') }}</a></p>
            </div>
        </div>
    </div>
</footer>

<script data-cfasync="false" src="{{ asset('admin/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js') }}">
</script>
<script src="{{ asset('admin/asset/js/plugins/apexcharts.min.js') }}"></script>
<script src="{{ asset('admin/asset/js/pages/dashboard-default.js') }}"></script><!-- [Page Specific JS] end --><!-- Required Js -->
<script src="{{ asset('admin/asset/js/plugins/popper.min.js') }}"></script>
<script src="{{ asset('admin/asset/js/plugins/simplebar.min.js') }}"></script>
<script src="{{ asset('admin/asset/js/plugins/bootstrap.min.js') }}"></script>
<script src="{{ asset('admin/asset/js/fonts/custom-font.js') }}"></script>
<script src="{{ asset('admin/asset/js/pcoded.js') }}"></script>
<script src="{{ asset('admin/asset/js/plugins/feather.min.js') }}"></script>



<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
<script src="https://cdn.datatables.net/2.0.8/js/dataTables.js"></script>

<script>
    new DataTable('#dataTable');
</script>

<script>
    layout_change('light');
</script>
<script>
    change_box_container('false');
</script>
<script>
    layout_caption_change('true');
</script>
<script>
    layout_rtl_change('false');
</script>
<script>
    preset_change('preset-1');
</script>
<script>
    main_layout_change('vertical');
</script>
@yield('scripts')

</body>

</html>
