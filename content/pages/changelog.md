---
title: Changelog
slug: changelog
status: published
description: Changelog for the Pure Comments project.
include_in_nav: false
---

# Changelog

## 1.4.0 - 14 April 2026
Added translation support. Currently has English (`en.php`) and German (`de.php`). German translations were created by AI, so please submit a PR if updates are required. [Read the docs](/working-with-translations).

**⚠️⚠️⚠️⚠️ IMPORTANT NOTE AFTER UPDATING:** Your site will produce a 500 error after updating. **This is expected behaviour**. It's because the current updater doesn't expect the `/lang` directory, so it won't copy the language files over during the update.

To fix this you have to manually copy the `/lang` directory to the root of your comments install. This is a one off action. Future updates will be fine.

---

## 1.3.2 — 21 March 2026

### Fixed
- The privacy policy URL field in settings is now optional. If left blank, the privacy link is hidden from the comment form entirely.

---

## 1.3.1 — 6 March 2026

### Added
- Rate limiting for comment submissions.

### Fixed
- Prevented unauthorised database downloads; emails are now encrypted at rest.

---

## 1.3.0 — 6 March 2026

### Added
- SMTP support for comment notification emails, with a test mail option in settings.

---

## 1.2.0 — 28 February 2026

### Added
- Support for running PureComments in a subfolder.

### Fixed
- Bug where post slugs could not be correctly derived.
- Various CSS fixes.

---

## 1.1.1 — 27 February 2026

### Fixed
- Bug with ability to derive slugs.

---

## 1.1.0 — 26 February 2026

### Added
- In-app updater support.

---

## 1.0.0 — 25 February 2026

### Added
- Initial release.
- Localisation support.

### Fixed
- Bug with admin reply notifications not sending correctly.
