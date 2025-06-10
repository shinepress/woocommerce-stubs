<?php


/**
 * Removes useless non-displayable and problematic Unicode characters from a string.
 *
 * This function eliminates characters that can cause formatting issues, invisible text,
 * or unexpected behavior in copy-pasted text. Specifically, it removes:
 *
 * - **Soft hyphen (`U+00AD`)** – Invisible unless text is broken across lines.
 * - **Zero-width spaces & joiners (`U+200B–U+200D`)** – Invisible and can cause copy/paste issues.
 * - **Directional markers (`U+200E–U+200F`, `U+202A–U+202E`)** – Can affect text rendering.
 * - **Byte Order Mark (BOM) (`U+FEFF`)** – Can interfere with encoding.
 * - **Interlinear annotation characters (`U+FFF9–U+FFFB`)** – Rarely used and unnecessary in checkout fields.
 *
 * It does **not** remove:
 *
 * - **Non-breaking space (`U+00A0`)** – Useful for preventing line breaks in addresses.
 * - **Word joiner (`U+2060`)** – Sometimes needed for proper text rendering in certain scripts.
 *
 * @param string $raw_value The input string to sanitize.
 *
 * @return string The sanitized string without problematic characters.
 * @since 9.9.0
 */
function wc_remove_non_displayable_chars(string $raw_value): string
{
}