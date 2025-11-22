import hashlib

log_filename = "access_log.txt"

with open("log_hash.txt","r") as hash_file:
    original_hash = hash_file.read()

failed_attempts = 0

print("Analyzing log file...\n")

with open(log_filename,"r") as log_file:
    for line in log_file:
        if "Failed login" in line:
            failed_attempts += 1
            print(line.strip())

print(f"\n Total faile attempts:{failed_attempts}")

if failed_attempts >= 3:
    print("Warning: Possible brute-force attack detected !")

else:
    print("No suspicious activity found. ")

def get_log_file_hash(filename):
    with open(filename,"rb") as f:
        return hashlib.sha256(f.read().hexdigest()
                              
new_hash = get_log_file_hash(log_filename)

if original_hash != new_hash:
   print("\n ALERT:L Log file has been modified!")

else:
    print("\n Log file integrity is safe." )

