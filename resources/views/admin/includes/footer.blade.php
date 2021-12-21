    <div class="container-fluid">
        <div class="card">
            <div class="card-body">
                <div class="row">
                    <div class="col-lg-6">
                        <ul class="list-inline mb-0">
                            <li class="list-inline-item"><a href="privacy-policy.html">Privacy Policy</a></li>
                            <li class="list-inline-item"><a href="terms-of-service.html">Terms of Use</a></li>
                        </ul>
                    </div>
                    <div class="col-lg-6 text-right">
                        <span class="mr-1">
                            {{-- <script data-cfasync="false" src="../../../../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script> --}}
                            <script>
                                document.write(new Date().getFullYear())
                            </script>©
                        </span> <a href="index.html" class="">E-commerce</a>.
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- Table Treeview JavaScript  --}}
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <script src="{{ asset('/assets/js/backend-bundle.min.js') }}" ></script>
    <script src="{{ asset('/assets/js/customizer.js') }}"></script>
        {{--    Chart Custom JavaScript --}}
    <script src="{{ asset('/assets/js/chart-custom.js') }}"></script>
        {{--   app JavaScript  --}}
    <script src="{{ asset('/assets/js/app.js') }}"></script>

    <script type="text/javascript">
        function resetForm() {
            location.reload();
        }


        $(document).ready(function()
		{ 
			$(document).bind("contextmenu",function(e){
					return false;
			}); 
		})
 
 
    </script>