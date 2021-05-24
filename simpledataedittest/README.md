# TYPO3 extension "simpledataedittest"

(translateds by goole - original german see Documentation/de.README.md)

## Preliminary remark
Detaching the tests from the extension `simpledataedit` was important to me.
I accept that the test extension presented here is only half-finished.
As the present test extension suggests, my actual goal is an extension that allows front-end editing for database structures that can also be read by Extbase.

## Who does what, with what, where, and when?
The extension shows how to use the viewhelper `editor` of the extension` simpledataedit` in templates.
It was created with the extension builder and represents all possible data cases that you would probably want to edit in the frontend.

## How do you install the extension?
This is a very classic approach.
1. Install or copy into `typo3conf / ext` folder via backend or composer or directly.
1. Activate the Typoscript in the TypoScript template
1. Start the UpdateScript

### Integrators: How do I test frontend editing?
#### How do I test with a standard element
In order to enable the user to have a trouble-free test out-of-the-box in a live system and with a classic upload of extensions via the backend,
the extension has its own backend layout.

The exemplary TypoScript must also be integrated for the test.

1. Create a test page
1. Create a TypoScript extension template for the page and load the Typoscript of this extension into it for the test
1. Set the backend layout of this extension on the test page.
1. Create the TYPO3 text element and enter a text in the header.

#####Background
The backend layout defines a test column with the ColPos value (7387).
After activating the test TypoScript of this extension, a test page in the column (7387)
Made the `header` field editable in a special template for the TYPO3` Text-only` content element.
In order for it to be visible, the `header` field must not be empty.
(see code * simpledataedittest / Resources / Private / Templates / FluidElements / Text.html *)

The other TYPO3 content elements, with the exception of the list element responsible for plugins, are not prepared for tests and only show an error message in the test column.
The plugins are displayed as before.

# Plugin currently not working

#### How do I test with the plugin?
In TYPO3 you often use your own extensions for special applications.
The plugin simulates
1. Create a test page
1. Create a TypoScript extension template for the page and load the Typoscript of this extension into it for the test
1. Set the backend layout of this extension on the test page.
1. Activate the plugin list

##### Hints
1. No data is initialized during installation.
1. You can either create some elements yourself.
   If you use an SQL database, you can also call the update script of this test extension via the install tool.
   It will empty its test tables using SQL queries and fill them again with valid data.
1. If you create your own system folder for the test data, you should store the ID of the system folder page in the extension constants.
   By default, the data records are stored on the page with ID 1.
1. The test data sets are designed for the future. Separate editors are to be programmed for some data fields in the future.

## Example for developers: How do I integrate my own front-end editor class?
The extension does not claim to offer an out-of-the-box solution for every front-editing request.
However, developers should be able to easily create their own editor variants via the interface class.
Using the example of the copy of the frontend class `plainTextEditor` from the basic extension` simpledataedit`, this class is made available in the system under a second name.
It's just meant to show how easy it is to integrate your own extensions.
