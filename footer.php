<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package RSS2021
 */

?>

       <!-- footer starts here -->
	   <footer>
            <div class="top-decoration"><span>
                    <!-- Here for CSS shapes --></span></div>
            <div class="contact-form">
                <h1>Contact Us</h1>
                <div class="wpforms-container wpforms-container-full" id="wpforms-215">
                    <form id="wpforms-form-215" class="wpforms-validate wpforms-form" data-formid="215" method="post"
                        enctype="multipart/form-data" action="/contact-us/"
                        data-token="abd4c6916a58bcaa964e755835a9161b">
                        <noscript class="wpforms-error-noscript">Please enable JavaScript in your browser to complete
                            this
                            form.</noscript>
                        <div id="wpforms-215-field_1-container" class="wpforms-field wpforms-field-name"
                            data-field-id="1">
                            <label class="wpforms-field-label" for="wpforms-215-field_1">Name <span
                                    class="wpforms-required-label">*</span>
                            </label>
                            <input type="text" id="wpforms-215-field_1"
                                class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][1]" required>
                        </div>
                        <div id="wpforms-215-field_2-container" class="wpforms-field wpforms-field-email"
                            data-field-id="1">
                            <label class="wpforms-field-label" for="wpforms-215-field_2">Email <span
                                    class="wpforms-required-label">*</span>
                            </label>
                            <input type="email" id="wpforms-215-field_2"
                                class="wpforms-field-medium wpforms-field-required" name="wpforms[fields][2]" required>
                        </div>
                        <div id="wpforms-215-field_3-container" class="wpforms-field wpforms-field-textarea"
                            data-field-id="2">
                            <label class="wpforms-field-label" for="wpforms-215-field_3">Message <span
                                    class="wpforms-required-label">*</span>
                            </label>
                            <textarea id="wpforms-215-field_3" class="wpforms-field-medium wpforms-field-required"
                                name="wpforms[fields][3]" required></textarea>
                        </div>
                        <div class="wpforms-submit-container"><input type="hidden" name="wpforms[id]" value="215">
                            <input type="hidden" name="wpforms[author]" value="1">
                            <input type="hidden" name="wpforms[post_id]" value="110">
                            <button type="submit" name="wpforms[submit]" class="wpforms-submit " id="wpforms-submit-215"
                                value="wpforms-submit" aria-live="assertive" data-alt-text="Sending..."
                                data-submit-text="Submit">
                                Submit
                            </button>
                        </div>
                    </form>
                </div>
            </div>
            <div class="menu-link">
                <div id="left-footer">
                    <h3>Quick Links</h3>
                    <ul>
                        <li>
                            <a href="index.html">Home</a>
                        </li>
                        <li>
                            <a href="faq.html">FAQ</a>
                        </li>
                        <li>
                            <a href="privacy.html">Privacy and Coookies</a>
                        </li>
                    </ul>
                </div>
                <div id="right-footer">
                    <h3>Follow us on</h3>
                    <div id="social-media-footer">
                        <ul>
                            <li>
                                <a href="#">
                                    <i class="fab fa-facebook"></i>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
</div><!-- #page -->

<?php wp_footer();?>

</body>
</html>
