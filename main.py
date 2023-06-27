import json
import requests

with open("module.json", "r") as file:
    data = file.read()

objJson = json.loads(data)

temp = objJson[0]['items_url']
temp1 = temp.split("courses/")
temp2 = temp1[1].split("/modules")[0]

user = 4637837  # Replace with the desired value or uncomment the line below to get it from $_GET['id']
# user = int(request.args.get('id'))

for obj in objJson:
    module_item_id, mid, duration, page_id, title = [], [], [], [], []
    for items in obj['items']:
        title.append(items['title'])
        module_item_id.append(items['id'])
        if 'contentMeta' in items and 'content_aux_details' in items['contentMeta'] and 'content_id' in items['contentMeta']:
            mid.append(items['contentMeta']['content_aux_details']['olympus_token'])
            duration.append(items['contentMeta']['content_aux_details']['duration'])
            page_id.append(items['contentMeta']['content_id'])
        else:
            mid.append(0)
            duration.append(0)
            page_id.append(0)

    arr = {
        "lms_user_id": user,
        "title": title,
        "course_id": temp2,
        "module_item_id": module_item_id,
        "mid": mid,
        "duration": duration,
        "page_id": page_id
    }
    
    url = "https://olympus1.mygreatlearning.com/learner_engagements/video_watch_events?pb_id=581"
    
    for i in range(len(arr['module_item_id'])):
        print(arr['title'][i])
        for j in range(0, arr['duration'][i]+1, 60):
            if arr['mid'][i] != 0:
                data = {
                    "ranges[0][s]": j,
                    "ranges[0][e]": j+60,
                    "page_id": arr['page_id'][i],
                    "course_id": arr['course_id'],
                    "position": j+50,
                    "module_item_id": arr['module_item_id'][i],
                    "lms_user_id": arr['lms_user_id'],
                    "mid": arr['mid'][i],
                    "media_type": "GL_HLS",
                    "duration": arr['duration'][i]
                }

                response = requests.post(url, data=data)

                if response.status_code == 200:
                    print("POST request successful!")
                else:
                    print("POST request failed!")


# var a = document.querySelectorAll('[title="Enrol Now"]')
# for(i = 0; i < a.length; i++) {
#     a[i].click();
# }
