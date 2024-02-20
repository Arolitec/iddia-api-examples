const prodUrl = '<REPLACE_WITH_PROD_URL>'
const token = '<REPLACE_WITH_YOUR_API_KEY>'

const sendData = async () => {
  try {
    const data = JSON.stringify({
      complaintTypeId: 1,
      customerBankAccountNumber: '1234567890',
      customerName: 'Nom du client',
      customerPhoneNumber: '2250555607018',
      customerEmail: 'email@example.com',
      description: 'Description de la réclamation',
      dynamicInfo: JSON.stringify({ name: 'my name' }), // Objet stringifié
    })

    const url = `${prodUrl}/api/v1/complaints`

    const response = await fetch(url, {
      method: 'POST',
      headers: {
        Authorization: `Bearer ${token}`,
        'Content-Type': 'application/json',
      },
      body: data,
    })

    const responseData = await response.json()
    console.log(JSON.stringify(responseData))
  } catch (error) {
    console.log(error)
  }
}

sendData()
