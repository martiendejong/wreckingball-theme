(function ($) {
	"use strict";
	$("#saaslauncher-dismiss-notice").on("click", ".notice-dismiss", function () {
		$.ajax({
			url: saaslauncher_admin_localize.ajax_url,
			method: "POST",
			data: {
				action: "saaslauncher_dismissble_notice",
				nonce: saaslauncher_admin_localize.nonce,
			},
			success: function (response) {
				if (response.success) {
					console.log("Notice dismissed successfully.");
					$("#saaslauncher-dismiss-notice").fadeOut(); // Hide the notice
				} else {
					console.log("Failed to dismiss notice:", response.data.message);
				}
			},
			error: function (jqXHR, textStatus, errorThrown) {
				console.log("Error:", textStatus, errorThrown);
			},
		});
	});

	// Dashboard
	const $dashboard = $(".dashboard-about-saaslauncher");
	const $tabs = $dashboard.find(".saaslauncher-tabs-item");
	const $contents = $dashboard.find(".saaslauncher-content-item");

	function changetab(index) {
		$tabs.removeClass("active");
		$contents.removeClass("active");

		// Add active class to the selected tab and content
		$tabs.eq(index).addClass("active");
		$contents.eq(index).addClass("active");
	}

	const getSessionTab = sessionStorage.getItem("saaslauncherActivePage");
	if (parseInt(getSessionTab)) {
		changetab(getSessionTab);
	} else {
		changetab(0);
	}
	$tabs.click(function () {
		const index = $(this).data("index");
		sessionStorage.setItem("saaslauncherActivePage", index);
		changetab(index);
	});

	// Recommended Plugins Page
	// Activate plugin
	$dashboard.find(".plugin-button.plugin-activate").click(function (e) {
		e.preventDefault();

		const pluginSlug = $(this).data("slug");
		const pluginFilename = $(this).data("filename");
		const pluginName = $(this).data("name");

		$(this).addClass("processing-spinner");

		$.ajax({
			url: saaslauncher_admin_localize.ajax_url,
			type: "POST",
			data: {
				action: "saaslauncher_rplugin_activation",
				nonce: saaslauncher_admin_localize.nonce,
				pluginSlug: pluginSlug,
				pluginFilename: pluginFilename,
				pluginName: pluginName,
			},
			success: function (response) {
				if (response.success) {
					window.location.href = saaslauncher_admin_localize.redirect_url;
				} else {
					$("#response-container").text(response.data);
				}

				$(this).removeClass("processing-spinner");
			},
			error: function (xhr, status, error) {
				// Handle error
				$("#response-container").text("An error occurred.");
				$(this).removeClass("processing-spinner");

				console.log(xhr.responseText);
			},
		});
	});

	// Activate all plugins
	$(
		"#saaslauncher-recommend-plugins__installer, #install-activate-button"
	).click(function (e) {
		e.preventDefault();
		const button = $(this);
		button.attr("disabled", "disabled");
		button
			.text("Installing & Activating required plugins")
			.addClass("processing-spinner");

		var activationData = {
			action: "saaslauncher_install_and_activate_plugins",
			nonce: saaslauncher_admin_localize.welcomeNonce,
		};

		$.post(
			saaslauncher_admin_localize.ajax_url,
			activationData,
			function (response) {
				var checkJSON = /{.*}/; // Regular expression to match the JSON portion
				var match = checkJSON.exec(response);
				if (match) {
					var jsonResponse = match[0]; // Extracted JSON portion
					try {
						var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

						if (responseObj.success === true) {
							window.location.href = saaslauncher_admin_localize.redirect_url;
						} else {
							console.log("Error!");
						}
					} catch (error) {
						console.log("Error parsing JSON!");
					}
				} else {
					//alert(response);
					if (response.success === true) {
						window.location.href = saaslauncher_admin_localize.redirect_url;
					} else {
						button.text(response.data.message);
					}
				}
			}
		);
	});

	// Activate licence with not 'Account' submenu
	$dashboard.find(".licence-activator.account-unavailable").click(function (e) {
		e.preventDefault();

		window.location.href = saaslauncher_admin_localize.scrollURL;
	});

	// Demos Page
	const demoRedirection = $dashboard.find(".demo-importer__redirection");
	demoRedirection.click(function (e) {
		e.preventDefault();

		if ($(this).hasClass("plugins-unavailable")) {
			demoRedirection.attr("disabled", "disabled");
			demoRedirection
				.text("Installing & Activating required plugins")
				.addClass("processing-spinner");

			var activationData = {
				action: "saaslauncher_install_and_activate_plugins",
				nonce: saaslauncher_admin_localize.welcomeNonce,
			};

			$.post(
				saaslauncher_admin_localize.ajax_url,
				activationData,
				function (response) {
					var checkJSON = /{.*}/; // Regular expression to match the JSON portion
					var match = checkJSON.exec(response);
					if (match) {
						var jsonResponse = match[0]; // Extracted JSON portion
						try {
							var responseObj = JSON.parse(jsonResponse); // Parse the extracted JSON

							if (responseObj.success === true) {
								window.location.href = saaslauncher_admin_localize.demoURL;
							} else {
								console.log("Error!");
							}
						} catch (error) {
							console.log("Error parsing JSON!");
						}
					} else {
						//alert(response);
						if (response.success === true) {
							window.location.href = saaslauncher_admin_localize.demoURL;
						} else {
							demoRedirection.text(response.data.message);
						}
					}
				}
			);
		} else {
			window.location.href = saaslauncher_admin_localize.demoURL;
		}
	});

	$(document).ready(function () {
		// Check if the 'scroll' parameter is in the URL
		var urlParams = new URLSearchParams(window.location.search);

		// Triggers scroll to Cozy Blocks in the plugins.php page
		if (urlParams.get("cozy-addons-scroll") === "true") {
			$("html, body").animate(
				{
					scrollTop:
						$(`.active[data-slug="cozy-addons"]`).offset().top -
						$(window).height() / 2 +
						$(`.active[data-slug="cozy-addons"]`).outerHeight() / 2,
				},
				1000
			);

			$(`.active[data-slug="cozy-addons"] .activate-license a`).addClass(
				"saaslauncher-highlighted"
			);

			setTimeout(() => {
				$(`.active[data-slug="cozy-addons"] .activate-license a`).removeClass(
					"saaslauncher-highlighted"
				);
			}, 3000);
		}
	});
})(jQuery);
