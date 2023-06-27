import requests

headers = {
    'authority': 'elevate.greatlearning.in',
    'accept': '*/*',
    'accept-language': 'en-US,en;q=0.9,ta-IN;q=0.8,ta;q=0.7',
    'authorization': 'Bearer KjxSfPPuUqa7eGr8z5gg4VB8y504vRjr9Gb7xbGkrXzxrKdrvPitb97nhMuYrE96',
    'origin': 'https://olympus.mygreatlearning.com',
    'referer': 'https://olympus.mygreatlearning.com/',
    'sec-ch-ua': '"Not.A/Brand";v="8", "Chromium";v="114", "Google Chrome";v="114"',
    'sec-ch-ua-mobile': '?0',
    'sec-ch-ua-platform': '"Windows"',
    'sec-fetch-dest': 'empty',
    'sec-fetch-mode': 'cors',
    'sec-fetch-site': 'cross-site',
    'user-agent': 'Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/114.0.0.0 Safari/537.36',
}

response = requests.get(
    'https://elevate.greatlearning.in/api/v1/courses/12583/modules?include[]=items&include[]=content_details&pb_id=581&per_page=50&student_id=4637837&use_new_flow=true',
    headers=headers,
)

print(response.content)