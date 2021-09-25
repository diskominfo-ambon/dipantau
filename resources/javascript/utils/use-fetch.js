import axios from 'axios';

/**
 *
 * @param {string} uri endpoint to fetch resouces.
 * @param {object} options.
 */
function useFetch(uri, options) {
  options?.onStart(); // trigger callback.

  return axios.get(uri);
}
