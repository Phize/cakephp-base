<?php
/**
 * アプリケーションタスククラス
 *
 * アプリケーションの全タスクはこのクラスを継承する
 */
class AppTask extends Shell {
	/**
	 * モデル
	 *
	 * @var array
	 */
	public $uses = array();

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
	 * 終了処理
	 */
	public function shutdown() {}

	/**
	 * ヘルプ
	 */
	public function help() {
		$this->shutdown();
	}

	/**
	 * メイン処理
	 */
	public function execute() {}
}
