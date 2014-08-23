<?php namespace Bkwld\Decoy\Input\VideoEncodingProviders;

// Dependencies
use Config;
use Services_Zencoder;
use Services_Zencoder_Exception;

/**
 * Encode videos with Zencoder
 */
class Zencoder implements VideoEncoderInterface {

	/**
	 * An instance of the official SDK
	 *
	 * @var Services_Zencoder
	 */
	protected $sdk;

	/**
	 * Constructor
	 */
	public function __construct() {

		// Create an instance of the sdk
		$this->sdk = new Services_Zencoder(Config::get('decoy::video.encode.api_key'));
	}

	/**
	 * Tell the service to encode a video given it's source
	 *
	 * @param string $source A string that can be resolved by the encoder
	 *                       to find the source video.  For instance, an
	 *                       absolute path to the video on this server
	 * @param callable $callback The callback is sent the following params
	 *                           - string $uid A unique id generated by
	 *                             the service
	 *                           - array $outputs An optional assoc array
	 *                             where the keys are labels for the outputs
	 *                             and the values are absolute paths of
	 *                             where the output will be saved
	 * @return string A GUID to the encode job on the service
	 */
	public function encode($source, $callback) {
		
		// Try to create a job
		try {
			$job = $this->sdk->jobs->create(
				// NEED TO CREATE A FUNCTION TO MASSAGE THE SOURCE AND CONFIG OPTIONS IN
			);
			call_user_func($callback, $job->id, $this->outputsToHash($jobs->outputs));
		} catch(Services_Zencoder_Exception $e) {
			// TODO OUT EXCEPTION HANDLING
		}

	}

	/**
	 * Massage the outputs from Zencoder into a key-val associative array
	 * 
	 * @param array $outputs
	 * @return array
	 */
	public function outputsToHash($outputs) {
		// FINISH THIS
	}

}