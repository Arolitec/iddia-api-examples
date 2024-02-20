const apiUrl = '<REPLACE_WITH_PROD_URL>/api/v1/complaint-types'
const token = '<REPLACE_WITH_YOUR_API_KEY>'

const fetchData = async () => {
  try {
    const response = await fetch(apiUrl, {
      method: 'GET',
      headers: {
        Authorization: `Bearer ${token}`,
        'Content-Type': 'application/json',
      },
    })

    if (!response.ok) {
      throw new Error(
        'Erreur lors de la récupération des types de réclamations'
      )
    }

    const data = await response.json()
    console.log(data)
  } catch (error) {
    console.error(error.message)
  }
}

fetchData()
