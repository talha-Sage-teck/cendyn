<?php

/**
 * PHPMailer - PHP email creation and transport class.
 * PHP Version 5.5.
 *
 * @see       https://github.com/PHPMailer/PHPMailer/ The PHPMailer GitHub project
 *
 * @author    Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>
 * @author    Jim Jagielski (jimjag) <jimjag@gmail.com>
 * @author    Andy Prevost (codeworxtech) <codeworxtech@users.sourceforge.net>
 * @author    Brent R. Matzelle (original founder)
 * @copyright 2012 - 2020 Marcus Bointon
 * @copyright 2010 - 2012 Jim Jagielski
 * @copyright 2004 - 2009 Andy Prevost
 * @license   http://www.gnu.org/copyleft/lesser.html GNU Lesser General Public License
 * @note      This program is distributed in the hope that it will be useful - WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or
 * FITNESS FOR A PARTICULAR PURPOSE.
 */


use League\OAuth2\Client\Token\AccessToken;
use  PHPMailer\PHPMailer\OAuth;

/**
 * OAuth - OAuth2 authentication wrapper class.
 * Uses the oauth2-client package from the League of Extraordinary Packages.
 *
 * @see     http://oauth2-client.thephpleague.com
 *
 * @author  Marcus Bointon (Synchro/coolbru) <phpmailer@synchromedia.co.uk>
 */
class OAuth2 extends OAuth
{

    /**
     * The current OAuth access token string.
     *
     * @var string
     */
    protected $oauthTokenString;

    public function __construct($options)
    {
        parent::__construct($options);
        $this->oauthTokenString = $options['accessToken'];
    }

    /**
     * Generate a base64-encoded OAuth token.
     *
     * @return string
     */
    public function getOauth64()
    {
        if(!empty($this->oauthTokenString)){
            return base64_encode(
                'user=' .
                $this->oauthUserEmail .
                "\001auth=Bearer " .
                $this->oauthTokenString .
                "\001\001"
            );
        }
        //Get a new token if it's not available or has expired
        if (null === $this->oauthToken || $this->oauthToken->hasExpired()) {
            $this->oauthToken = $this->getToken();
        }

        return base64_encode(
            'user=' .
            $this->oauthUserEmail .
            "\001auth=Bearer " .
            $this->oauthToken .
            "\001\001"
        );
    }


}
