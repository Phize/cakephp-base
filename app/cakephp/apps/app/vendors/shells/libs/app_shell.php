<?php
/**
 * アプリケーションシェルクラス
 *
 * アプリケーションの全シェルはこのクラスを継承する
 */
class AppShell extends Shell {
	/**
	 * タスク
	 *
	 * @var array
	 */
	public $tasks = array();

	/**
	 * アプリケーションの設定
	 *
	 * @var array
	 */
	protected $config = array();



	/**
	 * 初期処理
	 */
	public function startup() {
		$this->config = Configure::read('APP');
	}

	/**
	 * ヘルプ
	 */
	public function help() {}

	/**
	 * メイン処理
	 */
	public function main() {}
}
