<?php

/**
 * AirBubble - A PHP template engine
 *
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in all
 * copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN THE
 * SOFTWARE.
 *
 * @category  Library
 * @package   AirBubble
 * @author    Axel Nana <ax.lnana@outlook.com>
 * @copyright 2018 Aliens Group, Inc.
 * @license   MIT <https://github.com/ElementaryFramework/AirBubble/blob/master/LICENSE>
 * @version   GIT: 1.1.0
 * @link      http://bubble.na2axl.tk
 */

namespace ElementaryFramework\AirBubble\Tokens;

use ElementaryFramework\AirBubble\Parser\AttributesList;
use ElementaryFramework\AirBubble\Parser\IParser;
use ElementaryFramework\AirBubble\Renderer\IRenderer;
use ElementaryFramework\AirBubble\Renderer\Template;

/**
 * Token interface
 *
 * Provide methods and properties of all AirBubble tokens.
 *
 * @category Tokens
 * @package  AirBubble
 * @author   Axel Nana <ax.lnana@outlook.com>
 * @license  MIT <https://github.com/ElementaryFramework/AirBubble/blob/master/LICENSE>
 * @link     http://bubble.na2axl.tk/docs/api/AirBubble/Tokens/IToken
 */
interface IToken extends IParser, IRenderer
{
    /**
     * Gets the type of the token.
     *
     * A token can take only two kind of
     * type: PRE_PARSE_TOKEN and POST_PARSE_TOKEN.
     *
     * @return integer
     */
    public function getType(): int;

    /**
     * Gets the token's name.
     *
     * @return string The token's name
     */
    public function getName(): string;

    /**
     * Gets the XPath to this token.
     *
     * @return string The XPath
     */
    public function getPath(): string;

    /**
     * Gets the list of attributes in this token.
     *
     * @return AttributesList
     */
    public function getAttributes(): AttributesList;

    public function setTemplate(Template &$template);
}
