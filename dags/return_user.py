from airflow import DAG
from airflow.operators.python_operator import PythonOperator
from datetime import datetime, timedelta
from airflow.hooks.mysql_hook import MySqlHook
from airflow.operators.mysql_operator import MySqlOperator


default_args = {
    'owner': 'user',
    'depends_on_past': False,
    'start_date': datetime(2020, 4, 15),
    'email': ['user@mail.com'],
    'email_on_failure': False,
    'email_on_retry': False,
    'retries': 1,
    'retry_delay': timedelta(minutes=1),
}
dag = DAG('return_user', schedule_interval=None, default_args=default_args)

def save_db(**kwargs):
    query = 'select * from User'
    mysql_hook = MySqlHook(mysql_conn_id='mysql_test_conn', schema='testdb')
    connection = mysql_hook.get_conn()
    cursor = connection.cursor()
    cursor.execute(query)
    results = cursor.fetchall()
    for result in results:
        print("#"*40)
        print("#"*20, result, "#"*20)
        print("#"*40)

py = PythonOperator(
    task_id='py_opt',
    dag=dag,
    python_callable=save_db,
)

py