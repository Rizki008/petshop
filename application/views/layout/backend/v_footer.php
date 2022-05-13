<!-- Footer -->
<footer class="content-footer footer bg-footer-theme">
	<div class="container-xxl d-flex flex-wrap justify-content-between py-2 flex-md-row flex-column">
		<!-- <div class="mb-2 mb-md-0">
			©
			<script>
				document.write(new Date().getFullYear());
			</script>
			, made with ❤️ by
			<a href="https://themeselection.com" target="_blank" class="footer-link fw-bolder">ThemeSelection</a>
		</div>
		<div>
			<a href="https://themeselection.com/license/" class="footer-link me-4" target="_blank">License</a>
			<a href="https://themeselection.com/" target="_blank" class="footer-link me-4">More Themes</a>

			<a href="https://themeselection.com/demo/sneat-bootstrap-html-admin-template/documentation/" target="_blank" class="footer-link me-4">Documentation</a>

			<a href="https://github.com/themeselection/sneat-html-admin-template-free/issues" target="_blank" class="footer-link me-4">Support</a>
		</div> -->
	</div>
</footer>
<!-- / Footer -->

<div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
</div>
<!-- / Layout page -->
</div>

<!-- Overlay -->
<div class="layout-overlay layout-menu-toggle"></div>
</div>
<!-- / Layout wrapper -->


<!-- Core JS -->
<!-- build:js assets/vendor/js/core.js -->
<script src="<?= base_url() ?>backend/assets/vendor/libs/jquery/jquery.js"></script>
<script src="<?= base_url() ?>backend/assets/vendor/libs/popper/popper.js"></script>
<script src="<?= base_url() ?>backend/assets/vendor/js/bootstrap.js"></script>
<script src="<?= base_url() ?>backend/assets/vendor/libs/perfect-scrollbar/perfect-scrollbar.js"></script>

<script src="<?= base_url() ?>backend/assets/vendor/js/menu.js"></script>
<!-- endbuild -->

<!-- Vendors JS -->
<script src="<?= base_url() ?>backend/assets/vendor/libs/apex-charts/apexcharts.js"></script>

<!-- Main JS -->
<script src="<?= base_url() ?>backend/assets/js/main.js"></script>

<!-- Page JS -->
<script src="<?= base_url() ?>backend/assets/js/dashboards-analytics.js"></script>

<!-- Place this tag in your head or just before your close body tag. -->
<script async defer src="https://buttons.github.io/buttons.js"></script>
<script>
	function bacaGambar(input) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();
			reader.onload = function(e) {
				$('#gambar_load').attr('src', e.target.result);
			}
			reader.readAsDataURL(input.files[0]);
		}
	}

	$("#preview_gambar").change(function() {
		bacaGambar(this);
	});
</script>
<script>
	$(document).ready(function() {
		$.ajax({
			type: "POST",
			url: "<?= base_url('lokasi/provinsi') ?>",
			success: function(hasil_provinsi) {
				// console.log(hasil_provinsi);
				$("select[name=provinsi]").html(hasil_provinsi);
			}
		});
		$("select[name=provinsi]").on("change", function() {
			var id_provinsi_terpilih = $("option:selected", this).attr("id_provinsi");

			$.ajax({
				type: "POST",
				url: "<?= base_url('lokasi/kota') ?>",
				data: 'id_provinsi=' + id_provinsi_terpilih,
				success: function(hasil_kota) {
					// console.log(hasil_kota);
					$("select[name=kota]").html(hasil_kota);
				}
			});
		});
	});
</script>
</body>

</html>