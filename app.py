from flask import Flask, render_template,redirect, url_for,request, session
from flask_mysqldb import MySQL, MySQLdb
import execjs


app = Flask(__name__)

# 連接 MySQL資料庫
app.config['MYSQL_HOST'] = '127.0.0.1'         
app.config['MYSQL_USER'] = 'root'               
app.config['MYSQL_PASSWORD'] = 'Su900102'           
app.config['MYSQL_DB'] = 'soso'                                
mysql = MySQL(app)

mysql.init_app(app)

# 首頁
@app.route('/')
def home():
     return render_template('home.php')

# 註冊頁
@app.route('/signup', methods=["GET", "POST"])
def signup():
     if request.method == 'GET':
          return render_template("signup.php")
     else:
          name = request.form['name']
          email = request.form['email']
          password = request.form['password']
          password_check = request.form['password_check']
     
     if (password == password_check):
          cur = mysql.connection.cursor()
          cur.execute("INSERT INTO member (name, email, password) VALUES (%s,%s,%s)",(name, email, password))
          mysql.connection.commit()
          return redirect(url_for('home'))

# 登入頁
@app.route('/login', methods=["GET", "POST"])
def login():
     if request.method == 'POST':
          email = request.form['email']
          password = request.form['password']
          curl = mysql.connection.cursor(MySQLdb.cursors.DictCursor)
          curl.execute("SELECT * FROM member WHERE email=%s", [email])
          member = curl.fetchone()
          curl.close()
          if member == None:
               return "沒有這個帳號"
          if len(member) != 0:
               if (password, member["password"]) == member["password"]:
                    session['id'] = member['id']
                    return render_template("home.php")
               else:
                    return '帳號或密碼錯誤！'
     else:
          return render_template("login.php")

# 登出頁
@app.route('/logout',methods=["GET", "POST"])
def logout():
     session.clear()
     return render_template('home.php')

# 會員專區
@app.route('/member', methods=["GET", "POST"])
def member():
     return render_template('member.php')

if __name__ == '__main__':
    app.run()  