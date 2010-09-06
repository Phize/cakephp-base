<?php
/**
 * アプリケーションシェルクラス
 *
 * アプリケーションの全シェルはこのクラスを継承する
 */
class AppShell extends Shell {
	/**
	 * モデル
	 *
	 * @var array
	 */
	public $uses = array();

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
		$this->config = Configure::read('App');
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
