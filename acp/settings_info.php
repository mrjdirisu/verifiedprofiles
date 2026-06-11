<?php

/**
 * @package Verified Profiles
 * @copyright (c) 2026 Ötäll Last King Xipappa
 * @license https://opensource.org/license/gpl-2-0
 */

namespace otalllastking.xipappa\verifiedprofiles\acp;

class settings_info {

	public function module() {

		return [
			'filename'	=> '\otalllastking.xipappa\verifiedprofiles\acp\settings_module',
			'title'		=> 'ACP_VERIFIED_PROFILES',
			'modes'		=> [
				'settings'	=> [
					'title'	=> 'ACP_VERIFIED_PROFILES',
					'auth'	=> 'ext_otalllastking.xipappa/verifiedprofiles && acl_a_board',
					'cat'	=> [ 'ACP_CAT_USERS' ],
				],
			],
		];

	}

}
