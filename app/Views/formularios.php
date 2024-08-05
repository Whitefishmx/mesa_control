<div class="container">
	<div class="row">
		<div class="col l6">
			<style>
                .container {
                    width: 100%;
                }

                .formpreview text-center95 btnpopup {
                    background: rgba(53, 25, 255, 0.11) !important;
                }
			</style>
			<script
					type="text/javascript"
					src="https://api.clientify.net/web-marketing/superforms/script/183873.js"></script>
		</div>
		<div class="col l6">
			<script
					type="text/javascript"
					src="https://api.clientify.net/web-marketing/superforms/script/190235.js"></script>
		</div>
	</div>
</div>
<script>
	$(document).ready(function() {
		var checkIframeLoaded = setInterval(function() {
			var iframe = $('.commonembedclientify form_embed_clientify_embed_form'); // Selecciona el iframe
			if (iframe.length) {
				clearInterval(checkIframeLoaded);
				iframe.on('load', function() {
					console.log('Iframe has loaded');
					$(this).addClass('styled-iframe');
				});
			}
		}, 100); // Verifica cada 100 ms
	});
</script>
<style>
    .container {
        width: 100%;
    }

    .formpreview text-center95 btnpopup {
        background: #01579b !important;
    }
</style>