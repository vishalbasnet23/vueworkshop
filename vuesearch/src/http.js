import axios from 'axios';

export const HTTP = axios.create({
  baseURL: `http://localhost/vueworkshoptest/wp-json/wp/v2/`,
})
