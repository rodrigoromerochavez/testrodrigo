from pygithub3 import Github

gh = Github(user='rodrigoromerochavez@gmail.com', repo='master')

pull_requests = gh.pull_requests.list().all()
print pull_requests
pull_request_commits = gh.pull_requests.list_commits(2512).all()
print pull_request_commits 