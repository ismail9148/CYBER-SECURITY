import time
import hashlib

correct_password = "python123"

password_guesses = ["admin","123","password","letmein"]

log_filename = "access_log.tex"

with open (log_filename,"W")as log_file:
    for password in password_guesses:
        time.sleep(1)
        if password == correct_password:
            log_file.write(f"[INFO] Successful login with password : {password}\n ")
            print("Access Granted !")
            break

        else:
             log_file.write(f"[WARNING] Failed login with password : {password}\n ")
             print("Access denied")

def get_log_file_hash(filename):
    with open(filename,"rb") as f:
        return hashlib.sha256(f.read().hexdigest()    

with open ("log_hash.txt", "W") as hash_file:
     hash_file.write (get_log_file_hash(log_filename))
                                    