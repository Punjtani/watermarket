const axios = require("axios");

async function getCatFacts() {
	const response = await axios.get("api/auth/signin")
console.log(`{response.data.all.length} cat facts were returned.`)
}

getCatFacts()
