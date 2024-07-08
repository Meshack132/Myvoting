import sys
import bcrypt

def validate_user(admin_id, password):
    # Example: simulate fetching user from database
    stored_password_hash = b"$2b$12$KIXuSmkFY3ZSTkT8HFyC6O/SWqouQ.OeAWNfj9TSPI/uhJSCxlNBS"  # bcrypt hash of "password"
    if admin_id == "admin" and bcrypt.checkpw(password.encode(), stored_password_hash):
        return True
    return False

if __name__ == "__main__":
    admin_id = sys.argv[1]
    password = sys.argv[2]
    if validate_user(admin_id, password):
        print("success")
    else:
        print("failure")
