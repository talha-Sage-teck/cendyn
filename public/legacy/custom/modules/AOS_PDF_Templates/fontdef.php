<?php

// All fonts that are to be added for the frontend will be added here
global $sugar_config;
$url = $sugar_config['site_url'];

$font_def = "@font-face {
            font-family: 'Inter Semi Bold';
            src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-SemiBold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-SemiBold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Pitch Sans';
            src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot');
            src: url('{$url}/legacy/custom/webfonts/PitchSans-Regular.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/PitchSans-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Thin';
            src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Thin.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Thin.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Thin.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Medium';
            src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Medium.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Medium.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Medium.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Bold';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Light';
            src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Light.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Light';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraLight.woff2') format('woff2'),
                url('Inter-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Core';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Core.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Core.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Black';
            src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Black.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Black.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Black.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Extra Light';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Medium';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Medium.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans W Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSansW-Light.woff2') format('woff2'),
                url('ColumbiaSansW-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Extra Bold';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-ExtraBold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Light';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans W Extra Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSansW-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans Extra Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-ExtraLight.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Columbia Sans Light';
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot');
            src: url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ColumbiaSans-Light.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Medium Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-MediumItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Light Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-LightItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-LightItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Italic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Italic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Italic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Bold Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-BoldItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Light Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraLightItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Extra Bold Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-ExtraBoldItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'FS Emeric Bold';
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot');
            src: url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/FSEmeric-Bold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Black Italic';
            src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-BlackItalic.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'Inter Bold';
            src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot');
            src: url('{$url}/legacy/custom/webfonts/Inter-Bold.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Inter-Bold.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Inter-Bold.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        /* Microsoft fonts*/
        @font-face {
            font-family: 'TimesNewRomanPSMT';
            src: url('{$url}/legacy/custom/webfonts/TimesNewRomanPSMT.eot');
            src: url('{$url}/legacy/custom/webfonts/TimesNewRomanPSMT.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/TimesNewRomanPSMT.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/TimesNewRomanPSMT.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'terminal';
            src: url('{$url}/legacy/custom/webfonts/Terminal.eot');
            src: url('{$url}/legacy/custom/webfonts/Terminal.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Terminal.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Terminal.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'trebuchet ms';
            src: url('{$url}/legacy/custom/webfonts/TrebuchetMS.eot');
            src: url('{$url}/legacy/custom/webfonts/TrebuchetMS.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/TrebuchetMS.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/TrebuchetMS.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'webdings';
            src: url('{$url}/legacy/custom/webfonts/Webdings.eot');
            src: url('{$url}/legacy/custom/webfonts/Webdings.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Webdings.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Webdings.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'wingdings';
            src: url('{$url}/legacy/custom/webfonts/Wingdings-Regular.eot');
            src: url('{$url}/legacy/custom/webfonts/Wingdings-Regular.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Wingdings-Regular.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Wingdings-Regular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'verdana';
            src: url('{$url}/legacy/custom/webfonts/Verdana.eot');
            src: url('{$url}/legacy/custom/webfonts/Verdana.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Verdana.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Verdana.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'arial';
            src: url('{$url}/legacy/custom/webfonts/ArialMT.eot');
            src: url('{$url}/legacy/custom/webfonts/ArialMT.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ArialMT.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ArialMT.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'georgia';
            src: url('{$url}/legacy/custom/webfonts/Georgia.eot');
            src: url('{$url}/legacy/custom/webfonts/Georgia.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Georgia.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Georgia.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'arial black';
            src: url('{$url}/legacy/custom/webfonts/Arial-Black.eot');
            src: url('{$url}/legacy/custom/webfonts/Arial-Black.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Arial-Black.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Arial-Black.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'andale mono';
            src: url('{$url}/legacy/custom/webfonts/AndaleMono.eot');
            src: url('{$url}/legacy/custom/webfonts/AndaleMono.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/AndaleMono.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/AndaleMono.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'comic sans ms';
            src: url('{$url}/legacy/custom/webfonts/ComicSansMS.eot');
            src: url('{$url}/legacy/custom/webfonts/ComicSansMS.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/ComicSansMS.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/ComicSansMS.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'impact';
            src: url('{$url}/legacy/custom/webfonts/Impact.eot');
            src: url('{$url}/legacy/custom/webfonts/Impact.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/Impact.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Impact.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }

        @font-face {
            font-family: 'book antiqua';
            src: url('{$url}/legacy/custom/webfonts/BookAntiqua.eot');
            src: url('{$url}/legacy/custom/webfonts/BookAntiqua.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/BookAntiqua.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/BookAntiqua.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'symbol';
            src: url('{$url}/legacy/custom/webfonts/symbol.eot');
            src: url('{$url}/legacy/custom/webfonts/symbol.eot?#iefix') format('embedded-opentype'),
                url('{$url}/legacy/custom/webfonts/symbol.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/symbol.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'helvetica';
            src: url('{$url}/legacy/custom/webfonts/Helvetica.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/Helvetica.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }
        
        @font-face {
            font-family: 'helvetica neue';
            src: url('{$url}/legacy/custom/webfonts/HelveticaNeueRegular.woff2') format('woff2'),
                url('{$url}/legacy/custom/webfonts/HelveticaNeueRegular.woff') format('woff');
            font-weight: normal;
            font-style: normal;
            font-display: swap;
        }";

