<?php

namespace ipl\Uri;

/**
 * Representation of URIs
 */
interface UriInterface
{
    /**
     * Get the value of the parameter with the given name
     *
     * @param   string  $name       The name of the parameter
     * @param   mixed   $default    The default value of the parameter
     *
     * @return  mixed
     */
    public function getParam($name, $default = null);

    /**
     * Get a copy of this URI with the given parameter name-value pair
     *
     * @param   string  $name   The name of the parameter
     * @param   mixed   $value  The value of the parameter
     *
     * @return  static  A new instance with the given paramter name-value pair
     */
    public function withParam($name, $value);

    /**
     * Get a copy of this URI with the given parameters
     *
     * @param   array   $params The parameters in terms of name-value pairs
     *
     * @return  static  A new instance with the given parameters
     */
    public function withParams(array $params);

    /**
     * Get a copy of this URI without the given parameter
     *
     * @param   string  $name   The name of the parameter
     *
     * @return  static  A new instance without the given parameter
     */
    public function withoutParam($name);

    /**
     * Get a copy of this URI without the given parameters
     *
     * @param   string[]    $params The list of parameter names
     *
     * @return  static  A new instance without the given parameters
     */
    public function withoutParams(array $params);

    /**
     * Get the HTML string representation of the URI
     *
     * Multiple query parameters are separated by `&amp;`.
     * Depending on which components of the URI are present, the resulting string is either a full or relative URI.
     *
     * @return  string
     */
    public function toHtml();
}
