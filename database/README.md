## Database Schema

Table that stores all information of registered user.
| users
|---
| id
| name
| profession
| email
| phonenumber
| gender
| vaccine-status
| password
| image_id
| image_extension

Table that stores all information about the created classes.
|classrooms
|---
| id
| classroom_code
| teacher_name
| subject_name
| subject_code
| batch
| section
| room_no
| user_id

Table that stores the students who joined the classes.
| class_student
| ---
| classroom code
| user id

Table that stores all class comments by users.
| class_comments
| ---
| classroom_code
| comment
| user_id
| date_time

Table that stores information on classwork created by teacher.
| files
| ---
| classroom_code
| uploaded_file_name
| uploaded_file_size
| file_id (unique)
| classwork_title
| classwork_inst
| classwork_marks
| classwork_topic
| due_date
| create_date

Table that stores record of student submissions on classwork.

| student_submission
| ---
|classroom_code
| classwork_id
| user_id
| submission_file_id
| submission_date
| submission_file_name
| submission_file_extension
| marks

Table that stores weekly time-table of each user.
| time_table
| ---
| user_id
| day
| start_time
| end_time
| task

Table that stores information on all groups created.
| groups
| ---
| group-id
| group-name
| latest_msg_time

Table that stores information on users who joined different groups.
| group-users
| ---
| user_id
| group-id

Table that stores chats for the groups.
| group-chats
| ---
| user_id
| group-id
| date_time
| message
| message_id
| parent_message_id| 