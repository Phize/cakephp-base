<?php
/**
 * アプリケーションコントローラークラス
 *
 * アプリケーションの全コントローラーはこのクラスを継承する
 */
class AppController extends Controller {
	/**
	 * コンポーネント
	 *
	 * @var array
	 */
//	public $components = array();

	/**
	 * ヘルパー
	 *
	 * @var array
	 */
//	public $helpers = array();

	/**
	 * アプリケーションの設定
	 *
	 * @var array
	 */
	protected $config = array();



	/**
	 * コンストラクター
	 */
	public function __construct() {
		parent::__construct();

		$this->config = Configure::read('App');
	}

	/**
	 * beforeFilter
	 */
	public function beforeFilter() {
		$this->set('config', $this->config);
	}

	/**
	 * 404エラー
	 */
	public function error404() {
		$this->cakeError('error404');
	}
}
