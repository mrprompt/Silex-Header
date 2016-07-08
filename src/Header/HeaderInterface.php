<?php
namespace SilexFriends\Header;

/**
 *
 * @author Thiago Paes <mrprompt@gmail.com>
 */
interface HeaderInterface
{
    /**
     * Header authorization index
     *
     * @const string
     */
    const TOKEN_HEADER_KEY      = 'Authorization';

    /**
     * Header request key index
     *
     * @const string
     */
    const TOKEN_REQUEST_KEY     = '_token';

    /**
     * @var string
     */
    const HTTP_HEADER_GET_TOKEN = 'service.http.header';
}
