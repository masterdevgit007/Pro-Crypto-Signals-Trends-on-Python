import fetch from 'node-fetch';

export default async function handler(req, res) {
  try {
    const response = await fetch('https://partner.bybit.com/b/bitserver');
    if (!response.ok) {
      throw new Error('Failed to fetch data');
    }
    const data = await response.text();
    res.status(200).send(data);
  } catch (error) {
    console.error(error);
    res.status(500).send('Error fetching data');
  }
}
