# import the opencv library
import numpy as np
import cv2


# vid = cv2.VideoCapture(0)
# def make_1080p():
#     vid.set(3, 1920)
#     vid.set(4, 1080)

# def make_720p():
#     vid.set(3, 1280)
#     vid.set(4, 720)

# def make_480p():
#     vid.set(3, 640)
#     vid.set(4, 480)

# def change_res(width, height):
#     vid.set(3, width)
#     vid.set(4, height)

# change_res(100, 480)


# while(True):

#     ret, frame = vid.read()

#     cv2.imshow('frame', frame)

#     if cv2.waitKey(1) & 0xFF == ord('#'):
#         break

# vid.release()
# cv2.destroyAllWindows()
# vid.open()

# program to capture single image from webcam in python


# initialize the camera
# If you have multiple camera connected with
# current device, assign a value in cam_port
# variable according to that
cam_port = 0
cam = cv2.VideoCapture(cam_port)
# If image will detected without any error,
# show result

while(True):

    ret, frame = cam.read()

    cv2.imshow('frame', frame)

    if cv2.waitKey(1) & 0xFF == ord('#'):
        result, image = cam.read()
        name = input("File name: ")
        name = name + '.jpeg'
        # name = nama file, image = type(jpeg, png)
        cv2.imwrite(name, image)
        break
