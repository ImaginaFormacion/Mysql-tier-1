from locust import HttpLocust, TaskSet
import json


def getQuery(l):
    data = {
    }
    params = (
    )
    l.client.get('test.php', data=data, params=params)


class UserBehavior(TaskSet):
    tasks = {
        getQuery: 1
    }

class WebsiteUser(HttpLocust):
    task_set = UserBehavior
    min_wait = 5000
    max_wait = 9000
