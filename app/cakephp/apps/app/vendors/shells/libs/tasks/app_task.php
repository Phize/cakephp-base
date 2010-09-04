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
	 * ヘルプ
	 */
	public function help() {}

	/**
	 * メイン処理
	 */
	public function execute() {}
}
