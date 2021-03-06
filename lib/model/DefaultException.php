<?php
# Copyright (c) 2017, CESNET. All rights reserved.
#
# Redistribution and use in source and binary forms, with or
# without modification, are permitted provided that the following
# conditions are met:
#
#   o Redistributions of source code must retain the above
#     copyright notice, this list of conditions and the following
#     disclaimer.
#   o Redistributions in binary form must reproduce the above
#     copyright notice, this list of conditions and the following
#     disclaimer in the documentation and/or other materials
#     provided with the distribution.
#
# THIS SOFTWARE IS PROVIDED BY THE COPYRIGHT HOLDERS AND
# CONTRIBUTORS "AS IS" AND ANY EXPRESS OR IMPLIED WARRANTIES,
# INCLUDING, BUT NOT LIMITED TO, THE IMPLIED WARRANTIES OF
# MERCHANTABILITY AND FITNESS FOR A PARTICULAR PURPOSE ARE
# DISCLAIMED. IN NO EVENT SHALL THE COPYRIGHT OWNER OR CONTRIBUTORS
# BE LIABLE FOR ANY DIRECT, INDIRECT, INCIDENTAL, SPECIAL,
# EXEMPLARY, OR CONSEQUENTIAL DAMAGES (INCLUDING, BUT NOT LIMITED
# TO, PROCUREMENT OF SUBSTITUTE GOODS OR SERVICES; LOSS OF USE,
# DATA, OR PROFITS; OR BUSINESS INTERRUPTION) HOWEVER CAUSED AND ON
# ANY THEORY OF LIABILITY, WHETHER IN CONTRACT, STRICT LIABILITY,
# OR TORT (INCLUDING NEGLIGENCE OR OTHERWISE) ARISING IN ANY WAY
# OUT OF THE USE OF THIS SOFTWARE, EVEN IF ADVISED OF THE
# POSSIBILITY OF SUCH DAMAGE.

require_once(realpath(dirname(__FILE__)) . '/User.php');
# require_once(realpath(dirname(__FILE__)) . '/CveException.php');
require_once(realpath(dirname(__FILE__)) . '/PkgException.php');

/**
 * @author Michal Prochazka
 */
class DefaultException {
	/**
	 * @AttributeType int
	 */
	private $_id;
	/**
	 * @AttributeType String
	 */
	private $_version;
	/**
	 * @AttributeType String
	 */
	private $_release;
	/**
	 * @AttributeType String
	 */
	private $_description;
	/**
	 * @AttributeType Timestamp
	 */
	private $_timestamp;
	/**
	 * @AttributeType int
	 */
	private $_enabled = 1;
	/**
	 * @AssociationType User
	 * @AssociationMultiplicity 1
	 */
	public $_user;
	/**
	 * @AssociationType CveException
	 * @AssociationMultiplicity 0..*
	 */
	public $_cvesExceptions = array();
	/**
	 * @AssociationType PkgException
	 * @AssociationMultiplicity 0..*
	 */
	public $_pkgsExceptions = array();
}
?>