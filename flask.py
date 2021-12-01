{
  "nbformat": 4,
  "nbformat_minor": 0,
  "metadata": {
    "colab": {
      "name": "flask",
      "provenance": [],
      "collapsed_sections": [],
      "mount_file_id": "1ZJ3t2i2yu1Fugrv1xySfkjF2p-AUYFcq",
      "authorship_tag": "ABX9TyOiI27NBYDXqb5FrEgxlMtu",
      "include_colab_link": true
    },
    "kernelspec": {
      "name": "python3",
      "display_name": "Python 3"
    },
    "language_info": {
      "name": "python"
    }
  },
  "cells": [
    {
      "cell_type": "markdown",
      "metadata": {
        "id": "view-in-github",
        "colab_type": "text"
      },
      "source": [
        "<a href=\"https://colab.research.google.com/github/anesu-rirwa/anesurirwa/blob/main/flask.py\" target=\"_parent\"><img src=\"https://colab.research.google.com/assets/colab-badge.svg\" alt=\"Open In Colab\"/></a>"
      ]
    },
    {
      "cell_type": "code",
      "metadata": {
        "colab": {
          "base_uri": "https://localhost:8080/",
          "height": 282
        },
        "id": "wjo9fdSCf2M7",
        "outputId": "e6351caa-08de-48ae-a5f7-c25da661964b"
      },
      "source": [
        "import flask\n",
        "from flask import Flask, render_template, request\n",
        "import pickle\n",
        "\n",
        "# Running flask app\n",
        "app = Flask(__name__)\n",
        "\n",
        "#load model\n",
        "regr = pickle.load(open('/content/drive/MyDrive/Colab Notebooks/Fifa_Assignment.pkl', 'rb'))\n",
        "\n",
        "@app.route('/', methods=['GET'])\n",
        "def home():\n",
        "  return \"Hello World\"\n",
        "  #return render_template('/content/drive/MyDrive/Colab Notebooks/templates/index.html')\n",
        "\n",
        "@app.route('/', methods=['POST'])\n",
        "def predict():\n",
        "  int_feature = [int(x) for x in request.form.values()]\n",
        "  prediction = regr.predict([int_feature])\n",
        "\n",
        "  return render_template('/content/drive/MyDrive/Colab Notebooks/templates/index.html', prediction_text='The rating prediction is {}'.format(prediction))\n",
        "\n",
        "if __name__ == '__main__':\n",
        "  app.run(debug=True)"
      ],
      "execution_count": 2,
      "outputs": [
        {
          "output_type": "stream",
          "name": "stdout",
          "text": [
            " * Serving Flask app \"__main__\" (lazy loading)\n",
            " * Environment: production\n",
            "\u001b[31m   WARNING: This is a development server. Do not use it in a production deployment.\u001b[0m\n",
            "\u001b[2m   Use a production WSGI server instead.\u001b[0m\n",
            " * Debug mode: on\n"
          ]
        },
        {
          "output_type": "stream",
          "name": "stderr",
          "text": [
            " * Running on http://127.0.0.1:5000/ (Press CTRL+C to quit)\n",
            " * Restarting with stat\n"
          ]
        },
        {
          "output_type": "error",
          "ename": "SystemExit",
          "evalue": "ignored",
          "traceback": [
            "An exception has occurred, use %tb to see the full traceback.\n",
            "\u001b[0;31mSystemExit\u001b[0m\u001b[0;31m:\u001b[0m 1\n"
          ]
        },
        {
          "output_type": "stream",
          "name": "stderr",
          "text": [
            "/usr/local/lib/python3.7/dist-packages/IPython/core/interactiveshell.py:2890: UserWarning: To exit: use 'exit', 'quit', or Ctrl-D.\n",
            "  warn(\"To exit: use 'exit', 'quit', or Ctrl-D.\", stacklevel=1)\n"
          ]
        }
      ]
    },
    {
      "cell_type": "code",
      "metadata": {
        "id": "6z7HEKeritHv"
      },
      "source": [
        "from google.colab import drive\n",
        "drive.mount('/content/drive')"
      ],
      "execution_count": null,
      "outputs": []
    }
  ]
}